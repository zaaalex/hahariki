import { Type, Tag, Loc, Event } from 'main.core';

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

	async onReloadButtonClick(): void
	{
		const lobbyParams = await BX.ajax.runAction(
			'bitrix:hahariki.Lobby.createLobby',
			{
				data: {
					creatorId: this.#userId,
				},
			},
		)
			.then((response) => response.data)
		;

		if (!Type.isNil(lobbyParams.errors))
		{
			lobbyParams.errors.forEach((error: string) => this.#container.append(
				Tag.render`<div>${error}</div>`,
			));
		}

		window.location.href = lobbyParams.lobbyHref;
	}
}
