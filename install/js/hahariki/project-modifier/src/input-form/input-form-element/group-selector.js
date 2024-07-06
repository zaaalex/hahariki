import { Loc, Tag } from 'main.core';
import { BaseHeader, TagItem, TagSelector } from 'ui.entity-selector';

class DialogHeader extends BaseHeader
{
	render(): HTMLElement
	{
		return this.cache.remember('content', () => {
			return Tag.render`
				<div class="project-modifier__project-selector-header">
					${Loc.getMessage('PROJECT_MODIFIER_PROJECT_SELECTOR_TITLE')}
				</div>
			`;
		});
	}
}

export class GroupSelector
{
	#tagSelector: TagSelector;

	getSelector(): TagSelector
	{
		this.#tagSelector = new TagSelector({
			addButtonCaption: Loc.getMessage('PROJECT_MODIFIER_PROJECT_ADD_BTN_TITLE'),
			placeholder: Loc.getMessage('PROJECT_MODIFIER_PROJECT_SELECTOR_PLACEHOLDER'),
			dialogOptions: {
				header: DialogHeader,
				hideByEsc: true,
				enableSearch: true,
				width: 400,
				context: 'PROJECT_MODIFIER',
				entities: this.#getGroupSelectorConfig(),
			},
		});

		return this.#tagSelector;
	}

	#getGroupSelectorConfig(): Array
	{
		return [
			{
				id: 'project',
			},
		];
	}

	getSelectedTags(): TagItem[]
	{
		return this.#tagSelector.getTags();
	}

	removeSelectedTags(): void
	{
		this.#tagSelector.removeTags();
	}
}
