import { Tag } from 'main.core';

export class SecondStage
{
	render(): HTMLElement
	{
		const { node, btn } = Tag.render`
			<form ref="node">
				<label for="category">
					Введите категорю
				</label>
				<input id="category" type="text">
				<button ref="btn">Отправить</button>
			</form>
		`;

		return node;
	}
}
