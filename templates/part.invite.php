<div ng-if="view.elements.invite" id="controls">
	<p>
		<?php p($l->t('Click on a contact to add them to the conversation')); ?>
	</p>
</div>
<div
	ng-class="{'loading icon-loading': contacts.length == 0}"
	class="content-info"
	ng-if="view.elements.invite"
	>
	<div
		class="contact-container"
		ng-repeat="contact in contacts | backendFilter:active.backend | userFilter"
		ng-click="invite(contact)"
		>
		<div
			class="contact"
			data-size="200"
			data-parent="true"
			data-id="{{ contact.id }}"
			data-displayname="{{ contact.displayname }}"
			data-addressbook-backend="{{ contact.address_book_backend }}"
			data-addressbook-id="{{ contact.address_book_id  }}"
			avatar
			>
		</div>
		<div class="contact-label">
			{{ contact.displayname }}
		</div>
	</div>
</div>
