import { Tag, Type, Dom } from 'main.core';

import '../css/default.css';

export class NotificationService
{
	#checkContainer(container): void
	{
		if (!Type.isDomNode(container))
		{
			throw new Error('HTMLElement for render error not found');
		}
	}

	renderError(container: HTMLElement, errorPhrase: string = '', withCross: boolean = true, nodeId: string = ''): void
	{
		this.#checkContainer(container);

		const node = withCross
			? this.#getErrorWithCrossContainer(errorPhrase, nodeId)
			: this.#getErrorContainer(errorPhrase, nodeId)
		;

		container.append(node);
	}

	#getErrorWithCrossContainer(errorPhrase: string, nodeId: string): void
	{
		const { node, cross } = Tag.render`
			<div
				class="scrum-tools__error-hint"
				id="${nodeId}"
				ref="node"
			>
				<div class="scrum-tools__error-hint-cross">
					${errorPhrase}
					<span
						class="popup-window-close-icon"
						ref="cross"
					></span>
				</div>
			</div>
		`;

		cross.onclick = () => {
			Dom.remove(node);
		};

		return node;
	}

	#getErrorContainer(errorPhrase: string, nodeId: string): void
	{
		return Tag.render`
			<div class="scrum-tools__error" id="${nodeId}">
				${errorPhrase}
			</div>
		`;
	}

	renderErrorPage(container: HTMLElement, errorPhrase: string = ''): void
	{
		if (!Type.isDomNode(container))
		{
			throw new Error('HTMLElement for render error page not found');
		}

		const node = Tag.render`
			<div class="app-layout-subscribe-renew app-layout-error-block">
				<div class="app-layout-icon">
					<div class="app-layout-icon-cloud app-layout-icon-cloud-blue app-layout-icon-cloud-left-top"></div>
						<div class="app-layout-icon-cloud app-layout-icon-cloud-left-bottom"></div>
						<div class="app-layout-icon-cloud app-layout-icon-cloud-blue app-layout-icon-cloud-blue-right app-layout-icon-cloud-right-bottom"></div>
						<div class="app-layout-icon-cloud app-layout-icon-cloud-right app-layout-icon-cloud-right-top"></div>
						<div class="app-layout-icon-main app-layout-icon-main-error">
						<div class="app-layout-icon-refresh"></div>
						<div class="app-layout-icon-circle"></div>
						<div class="app-layout-icon-alert"></div>
					</div>
				</div>
				<p>${errorPhrase}</p>
			</div>
		`;

		container.replaceWith(node);
	}
}
