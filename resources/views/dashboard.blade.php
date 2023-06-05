<x-app-layout>
    <x-slot name="header">Anasayfa</x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <x-jet-welcome />
                </div>
            </div>
        </div>
    @foreach($konus as $konu)
        <div class="bg-white">

            <div class="position-relative bg-light m-5">


            <h4>{{$konu->pointName}} </h4>
            <P>
                {{$konu->opinion}}
            </P>

        </div>
        </div>
    @endforeach

    {{$konus->links()}}

</x-app-layout>
