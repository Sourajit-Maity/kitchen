<x-admin-layout title="FAQ Management">
    <x-slot name="subHeader">
            <x-admin.sub-header headerTitle="{{ $faqMaster ? 'Edit' : 'Add' }} FAQ">
				<x-admin.breadcrumbs>
						<x-admin.breadcrumbs-item  value="Dashboard" href="{{ route('admin.dashboard') }}" />
						<x-admin.breadcrumbs-separator />
						<x-admin.breadcrumbs-item href="{{ route('faq-master.index') }}" value="FAQ List" />
						<x-admin.breadcrumbs-separator />
						<x-admin.breadcrumbs-item  value="{{ $faqMaster ? 'Edit' : 'Add' }} FAQ" />

				</x-admin.breadcrumbs>
				<x-slot name="toolbar">	
				</x-slot>
			</x-admin.sub-header>
	</x-slot>
	<livewire:admin.faq-master.faq-master-create-edit :faqMaster="$faqMaster"/>
</x-admin-layout>