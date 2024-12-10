<table class="table table-responsive table-hover">
            <thead>
                <tr>
                     @foreach ($headers as $header)
                        <th>{{ strtoupper($header) }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach ($listPDF as $item)
                <tr>
                    @foreach ($headers as $header)
                        <td>
                            @if (isset($item[$header]))
                                @if ($header === 'LINK')
                                    <a href="{{ url($item[$header]) }}" target="_blank">
                                        {{ $item[$header] }}
                                    </a>
                                @else
                                    {{ $item[$header] }}
                                @endif
                            @endif
                        </td>
                    @endforeach
                </tr>
            @endforeach
            </tbody>
        </table>