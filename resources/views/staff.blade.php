<x-layout>
    
    <div class=container-fliud>
        <div class="row">
            @foreach($staff as $staff)
            <div class="col-12 col-md-4">
                <x-card>
                name="{{$staff['name']}}"
                surname="{{$staff['surname']}}"
                description="{{$staff['description']}}"
                </x-card>
            </div>
            @endforeach   
        </div>
    </div>
    
</x-layout>