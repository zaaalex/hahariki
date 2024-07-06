import { Tag, Loc } from 'main.core';
import { EventEmitter } from 'main.core.events';
import { GroupSelector } from './input-form-element/group-selector';

import '../../css/input-form.css';

export class InputForm extends EventEmitter
{
	#groupSelector: GroupSelector;

	constructor()
	{
		super();
		this.#groupSelector = new GroupSelector();

		this.setEventNamespace('ScrumTools.ProjectModifier.InputForm');
	}

	clearForm(): void
	{
		this.#groupSelector.removeSelectedTags();
	}

	getSelectedTags(): Array
	{
		return this.#groupSelector.getSelectedTags();
	}

	render(): HTMLElement
	{
		const { node, form, selectorContainer } = Tag.render`
			<section aria-label="Form for selecting projects for modernization" ref="node">
				<form class="project-modifier__choose-project-form" ref="form">
					<div class="project-modifier__project-selector" ref="selectorContainer"></div>
					<button 
						class="ui-btn ui-btn-primary project-modifier__submit-button"
						type="submit"
					>
						${Loc.getMessage('PROJECT_MODIFIER_FORM_SUBMIT_BTN_TEXT')}
					</button>
				</form>
			</section>
		`;

		this.#addGroupSelector(selectorContainer);
		this.#addHint(form);

		// eslint-disable-next-line @bitrix24/bitrix24-rules/no-native-events-binding
		node.addEventListener('submit', (event) => {
			event.preventDefault();
			this.emit('onProjectModifierFormSubmit');
		});

		return node;
	}

	#addGroupSelector(node: HTMLElement): void
	{
		this.#groupSelector.getSelector().renderTo(node);
	}

	#addHint(node: HTMLElement): void
	{
		node.append(
			BX.UI.Hint.createNode(Loc.getMessage('PROJECT_MODIFIER_FORM_HINT')),
		);
	}
}
