import { Event, Tag } from 'main.core';

export class ThirdStage
{
	render(): HTMLElement
	{
		const { node, btn } = Tag.render`
			<div class="hahariki__input-container" ref="node">
				<input class="hahariki_input input" placeholder="Введите продолжение фразы">
				<button class="button is-info" ref="btn">Отправить</button>
			</div>
		`;

		// Event.bind(
		// 	btn,
		// 	'click',
		// 	this.#renderThirdStage.bind(this),
		// );x

		return node;
	}
}
