import { Type, Tag, Loc } from 'main.core';

type MainPageParams = {
	userId: number,
	container: HTMLElement,
}

export class MainPage
{
	#userId: number;
	#container: HTMLElement;

	constructor(params: MainPageParams)
	{
		if (!Type.isDomNode(params.container))
		{
			throw new Error('HTMLElement for render not found');
		}

		if (!Type.isNumber(params.userId))
		{
			throw new TypeError('The userId must be a number');
		}

		this.#userId = params.userId;
		this.#container = params.container;
	}

	show(): void
	{
		this.#container.append(this.#showMainPage());
	}

	#showMainPage(): HTMLElement
	{
		const { node, btn } = Tag.render`
			<div class="" ref="node">
				<button class="hahariki_create-lobby-btn button is-link is-light" ref="btn">
					${Loc.getMessage('HAHARIKI__CREATE_BTN_TEXT')}
				</button>
			</div>
		`;

		Event.bind(
			btn,
			'click',
			this.onReloadButtonClick.bind(this),
		);

		return node;
	}

	onReloadButtonClick(): Promise
	{
		return BX.ajax.runAction(
			'bitrix:scrumtools.TaskPlacement.getBugsListGrid',
			{
				data: {},
			},
		)
			.then((response) => response.data.html)
		;
	}
}
