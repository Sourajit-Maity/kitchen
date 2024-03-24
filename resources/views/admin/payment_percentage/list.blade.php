<x-admin-layout title="Payment Percentage Management">
    <x-slot name="subHeader">
            <x-admin.sub-header headerTitle="Payment Percentage List">
				<x-admin.breadcrumbs>
						<x-admin.breadcrumbs-item href="{{ route('admin.dashboard') }}" value="Dashboard" />
						<x-admin.breadcrumbs-separator />
						<x-admin.breadcrumbs-item href="{{ route('payment-percentage.index') }}" value="Payment Percentage List" />
				</x-admin.breadcrumbs>

			    <x-slot name="toolbar" >
					<a href="{{route('payment-percentage.create')}}" class="btn btn-brand btn-elevate btn-icon-sm">
						<i class="la la-plus"></i>
						Add New Payment Percentage
					</a>
				</x-slot>
			</x-admin.sub-header>
    </x-slot>
	<livewire:admin.payment-percentage.payment-percentage-list/>
</x-admin-layout>