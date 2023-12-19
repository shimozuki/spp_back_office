<x-app-layout :title="$title">
    <section class="section">
        <div class="section-header">
            <h1>{{ $title }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Data Master</a></div>
                <div class="breadcrumb-item">Kelas</div>
            </div>
        </div>
    </section>

    <livewire:room-datatable :title="$title" />
</x-app-layout>
