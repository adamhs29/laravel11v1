<!-- Current: "bg-zinc-900 text-white", Default: "text-zinc-300 hover:bg-zinc-700 hover:text-white" -->

<a {{ $attributes }} 
class="
{{-- nomor 6 agar tombol menjadi aktif saat ditekan --}}
{{ request()->fullUrlIs(url($href)) ? 'bg-zinc-700 text-white' : 'text-zinc-300 hover:bg-zinc-800 hover:text-white' }}
 
block rounded-md px-3 py-2 text-sm text-zinc-300 hover:bg-zinc-700 hover:text-white">
    {{ $slot }} 
</a>