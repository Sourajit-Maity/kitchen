<x-admin-layout title="Payment Percentage Management">
    <x-slot name="subHeader">
            <x-admin.sub-header headerTitle="{{ $paymentPercentage ? 'Edit' : 'Add' }} FAQ">
				<x-admin.breadcrumbs>
						<x-admin.breadcrumbs-item  value="Dashboard" href="{{ route('admin.dashboard') }}" />
						<x-admin.breadcrumbs-separator />
						<x-admin.breadcrumbs-item href="{{ route('payment-percentage.index') }}" value="Payment Percentage List" />
						<x-admin.breadcrumbs-separator />
						<x-admin.breadcrumbs-item  value="{{ $paymentPercentage ? 'Edit' : 'Add' }} Payment Percentage" />

				</x-admin.breadcrumbs>
				<x-slot name="toolbar">	
				</x-slot>
			</x-admin.sub-header>
	</x-slot>
	<livewire:admin.payment-percentage.payment-percentage-create-edit :paymentPercentage="$paymentPercentage"/>
</x-admin-layout>