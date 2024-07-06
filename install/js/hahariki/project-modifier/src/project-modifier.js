import { NotificationService } from 'scrumtools.notification-service';
import { InputForm } from './input-form/input-form';
import { Loader } from 'main.loader';
import { Confetti } from 'ui.confetti';
import { MessageBox } from 'ui.dialogs.messagebox';
import { Loc, Dom, Type, Text } from 'main.core';

type ProjectModifierParams = {
	container: HTMLElement;
	notificationContainer: HTMLElement;
};

export class ProjectModifier
{
	#notificationService: NotificationService;
	#inputForm: InputForm;
	#loader: Loader;

	#container: HTMLElement;
	#notificationContainer: HTMLElement;

	constructor(params: ProjectModifierParams)
	{
		this.#checkParams(params);

		this.#container = params.container;
		this.#notificationContainer = params.notificationContainer;

		this.#notificationService = new NotificationService();
		this.#inputForm = new InputForm();
		this.#loader = new Loader({
			target: this.#container,
		});

		this.#handleEvents();
	}

	#checkParams(params: ProjectModifierParams): void
	{
		if (!Type.isDomNode(params.container))
		{
			throw new TypeError('HTMLElement for render project modifier form not found');
		}

		if (!Type.isDomNode(params.notificationContainer))
		{
			throw new TypeError('HTMLElement for render notification not found');
		}
	}

	#handleEvents(): void
	{
		this.#inputForm.subscribe(
			'onProjectModifierFormSubmit',
			() => this.#onProjectModifierFormSubmit(),
		);
	}

	showForm(): void
	{
		this.#container.append(this.#inputForm.render());
	}

	#onProjectModifierFormSubmit(): void
	{
		MessageBox.show({
			message: Loc.getMessage('PROJECT_MODIFIER_FORM_HINT'),
			modal: true,
			buttons: BX.UI.Dialogs.MessageBoxButtons.OK_CANCEL,
			onOk: (messageBox) => {
				void this.#onConfirmModify();
				messageBox.close();
			},
			onCancel: (messageBox) => {
				messageBox.close();
			},
		});
	}

	async #onConfirmModify(): Promise
	{
		Dom.clean(this.#notificationContainer);
		this.#showLoader();

		const projectsList = this.#inputForm.getSelectedTags();
		if (projectsList.length === 0)
		{
			this.#notificationService.renderError(
				this.#notificationContainer,
				Loc.getMessage('PROJECT_MODIFIER_FORM_EMPTY_PROJECT_FIELD_ERROR'),
			);

			this.#hideLoader();

			return;
		}

		await Promise.allSettled(projectsList.map((project: number) => this.#modifyProject(project.id)))
			.then((results) => {
				results.forEach((result, number) => {
					if (result.status === 'fulfilled')
					{
						this.#onSuccessModified(projectsList[number].title.text);
					}

					if (result.status === 'rejected')
					{
						this.#onUnsuccessfulModified(projectsList[number].title.text);
						console.error('Upgrading a Scrum project failed', result.reason.errors);
					}
				});
			})
			.catch((error) => {
				console.error(error);
			})
		;

		this.#inputForm.clearForm();
		this.#hideLoader();
	}

	#modifyProject(projectId: number): Promise
	{
		return BX.ajax.runAction(
			'bitrix:scrumtools.Project.modifyProject',
			{
				data: {
					projectId,
				},
			},
		);
	}

	#onSuccessModified(projectTitle: string): void
	{
		const preparedTitle = Text.encode(projectTitle);

		BX.UI.Notification.Center.notify({
			content: Loc.getMessage('PROJECT_MODIFIER_FORM_HANDLE_SUCCESS', { '#PROJECT_TITLE#': preparedTitle }),
		});

		Confetti.fire();
	}

	#onUnsuccessfulModified(projectTitle: string): void
	{
		const preparedTitle = Text.encode(projectTitle);

		this.#notificationService.renderError(
			this.#notificationContainer,
			Loc.getMessage('PROJECT_MODIFIER_FORM_PROCESSING_ERROR').replace('#PROJECT_TITLE#', preparedTitle),
		);
	}

	#showLoader(): void
	{
		void this.#loader.show();
		Dom.addClass(this.#container, 'project-modifier__darkened');
	}

	#hideLoader(): void
	{
		void this.#loader.hide();
		Dom.removeClass(this.#container, 'project-modifier__darkened');
	}
}
