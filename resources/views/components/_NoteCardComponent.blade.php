


{{-- <div style="display: flex; justify-content: space-between; align-items: center; padding: 1rem; border: 2px dashed #e91e6275; margin-bottom: 1rem; font-family: monospace; border-radius: .5rem; font-weight: bold;"
    onmouseover="this.style.borderColor='#e91e62'" onmouseout="this.style.borderColor='#e91e6275'">
    <div>
        <a style="flex: 1; text-decoration: none; color: rgba(0, 0, 0, 0.6); font-size: 1.5rem;"
            onmouseover="this.style.color='#000'" onmouseout="this.style.color='rgba(0, 0, 0, 0.6)'"
            href="{{ isset($show) ? route($show, $id) : '#' }}">{{ $title ?? 'title' }}</a>
    </div>
    <div style="display: flex; gap: 1rem;">
        <a style="padding: 14px 24px; color: #333; text-decoration: none; cursor: pointer; border: none; border-radius: 4px; background-color: #FFEB3B;"
            onmouseover="this.style.backgroundColor='#FFD54F'" onmouseout="this.style.backgroundColor='#FFEB3B'"
            href="{{ isset($edit) ? route($edit, $id) : '#' }}">Edit</a>
        <form style="display: inline;" method="POST" action="{{ isset($destroy) ? route($destroy, $id) : '#' }}">
            @method('DELETE')
            @csrf
            <input
                style="padding: 14px 24px; color: #fff; text-decoration: none; cursor: pointer; border: none; border-radius: 4px; background-color: #F44336;font-family: monospace;font-weight: bold;"
                type="submit" value="Delete">
        </form>
    </div>
</div> --}}
