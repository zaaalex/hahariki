import { Type, Tag } from 'main.core';
import { SecondStage } from './secondStage';
import { Start } from './start';
import { ThirdStage } from './thirdStage';

type LobbyPageParams = {
	container: HTMLElement,
}
export class Lobby
{
	#container: HTMLElement;
	constructor(params: LobbyPageParams)
	{
		if (!Type.isDomNode(params.container))
		{
			throw new Error('HTMLElement for render not found');
		}

		// eslint-disable-next-line no-param-reassign
		params.container.innerHTML = '';

		this.#container = params.container;
	}

	show(stage): void
	{
		this.#container.append(this.#showLobbyPage(stage));
	}

	#showLobbyPage(stage): HTMLElement
	{
		const { node } = Tag.render`
			<div class="hahariki_lobby" ref="node">
				${this.#render(stage)}
			</div>
		`;

		return node;
	}

	#render(stage): HTMLElement
	{
		let content = null;

		// eslint-disable-next-line default-case
		// eslint-disable-next-line no-case-declarations,default-case
		switch (stage)
		{
			case 1:
				// eslint-disable-next-line no-case-declarations
				const start = new Start();
				content = start.renderBtnStart();
				break;
			case 2:
				// eslint-disable-next-line no-case-declarations
				const second = new SecondStage();
				content = second.render();
				break;
			case 3:
				// eslint-disable-next-line no-unused-vars,no-case-declarations
				const third = new ThirdStage();
				content = third.render();
				break;
		}

		return content;
	}
}
