import { Tag, Event } from 'main.core';
import { Lobby } from './lobby';

type sessionParams = {
	id: number,
	status: number,
	ownerId: number,
	stage: number,
	timestamp: number
}

type startParams = {
	session: sessionParams
}
export class Start
{
	// #id: number;
	// #status: number;
	// #ownerId: number;
	// #stage: number;
	// #timestamp: number;
	// constructor(stage)
	// {
	// 	this.#stage = stage;
	// }

	renderBtnStart(): HTMLElement
	{
		const { node, btn } = Tag.render`
			<div class="hahariki_start-container" ref="node">
				<button class="hahariki_start-btn button is-info" ref="btn">
					Старт
				</button>
			</div>
		`;

		Event.bind(
			btn,
			'click',
			this.#renderSecondStage.bind(this),
		);

		return node;
	}

	#renderSecondStage(): HTMLElement
	{
		const lobby = new Lobby({
			container: document.getElementById('hahariki-game-lobby'),
		});

		lobby.show(2);
	}
}
