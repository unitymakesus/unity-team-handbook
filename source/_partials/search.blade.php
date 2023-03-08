<div id="docsearch" class="mb-8">
    <label for="docsearch-input">Search</label>
    <input id="docsearch-input" class="docsearch-input relative block h-10 transition-fast w-full max-w-xs bg-white border border-current px-4 pb-0" name="docsearch" type="text" />
</div>

@push('scripts')
    @if ($page->docsearchAppId && $page->docsearchApiKey && $page->docsearchIndexName)
        <script type="text/javascript">
            var docSearchData = {
                appId: '{{ $page->docsearchAppId }}',
                apiKey: '{{ $page->docsearchApiKey }}',
                indexName: '{{ $page->docsearchIndexName }}',
            };
        </script>
    @endif
@endpush
