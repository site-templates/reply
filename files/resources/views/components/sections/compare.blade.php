@props([
    'heading' => 'The whole thing, side by side.',
    'featureLabel' => 'Feature',
    'columnOne' => 'Solo',
    'columnTwo' => 'Team',
    'columnThree' => 'Scale',
    'items' => [],
])
<!--
    The comparison table. It scrolls horizontally inside its own container on
    small screens rather than shrinking the type — a four-column table squeezed
    into 390px is unreadable and pushes the whole page sideways.
-->
<section class="py-20 md:py-28 lg:py-32">
    <div class="mx-auto w-full max-w-5xl px-5 sm:px-8">

        <h2 data-reveal class="max-w-xl font-display font-normal text-ink display-section">{{ $heading }}</h2>

        <div data-reveal class="reveal-1 mt-12 overflow-x-auto rounded-2xl border border-line">
            <table class="w-full min-w-[40rem] border-collapse text-left">
                <thead>
                    <tr class="border-b border-line bg-panel">
                        <th scope="col" class="px-6 py-4 text-xs font-semibold uppercase tracking-[0.12em] text-faint">{{ $featureLabel }}</th>
                        <th scope="col" class="px-6 py-4 font-display text-[0.9375rem] font-semibold tracking-tight text-ink">{{ $columnOne }}</th>
                        <th scope="col" class="px-6 py-4 font-display text-[0.9375rem] font-semibold tracking-tight text-ink">{{ $columnTwo }}</th>
                        <th scope="col" class="px-6 py-4 font-display text-[0.9375rem] font-semibold tracking-tight text-ink">{{ $columnThree }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $row)
                        <tr class="border-b border-line transition-colors duration-200 last:border-b-0 hover:bg-panel/60">
                            <th scope="row" class="px-6 py-4 text-[0.9375rem] font-medium text-ink">{{ $row->feature }}</th>
                            <td class="px-6 py-4 text-[0.9375rem] text-muted">{{ $row->solo }}</td>
                            <td class="px-6 py-4 text-[0.9375rem] text-muted">{{ $row->team }}</td>
                            <td class="px-6 py-4 text-[0.9375rem] text-muted">{{ $row->scale }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</section>
