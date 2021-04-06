<x-guest-layout>
    @foreach($pages as page)
        <div class="border border-black mb-2">
            <h1 class="text-2x1">{{$pages->title}}</h1>
            <p>{{$pages->body}}</p>
            <a class="hover:underline" hrev ="{{route('public_pages_show',$pages->id)}}">View</a>
        </div>
        @endforeach
</x-guest-layout>
