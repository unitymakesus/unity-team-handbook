<div id="docsearch" class="mb-8"></div>

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
