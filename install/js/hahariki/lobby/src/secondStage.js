import { Event, Tag } from 'main.core';
import { Lobby } from './lobby';

export class SecondStage
{
	render(): HTMLElement
	{
		const { node, btn } = Tag.render`
			<div class="hahariki__input-container" ref="node">
				<input class="hahariki_input input" id="category" type="text" placeholder="Введите категорию">
				<button class="button is-info" ref="btn">Отправить</button>
			</div>
		`;

		Event.bind(
			btn,
			'click',
			this.#renderThirdStage.bind(this),
		);

		return node;
	}

	#renderThirdStage()
	{
		const lobby = new Lobby({
			container: document.getElementById('hahariki-game-lobby'),
		});

		lobby.show(3);
	}
}
