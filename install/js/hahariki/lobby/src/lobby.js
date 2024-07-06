import { Type, Tag } from 'main.core';

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

		this.#container = params.container;
	}

	show(): void
	{
		this.#container.append(this.#showLobbyPage());
	}

	#showLobbyPage(): HTMLElement
	{
		const { node } = Tag.render`
			<div class="hahariki_lobby" ref="node">
				Lobby
			</div>
		`;

		return node;
	}
}
