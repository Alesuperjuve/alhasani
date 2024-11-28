<table class="table table-bordered table-responsive table-striped table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">NO</th>
                            <th class="text-center">NAMA ASRAMA</th>
                            <th class="text-center">CREATED AT</th>
                            <th class="text-center">UPDATED AT</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($asramas as $key => $asrama)
                            <tr>
                                <td class="text-center">{{ $key + 1 }}</td>
                                <td>
                                    <a href="#" 
                                class="edit-asrama" 
                                data-id="{{ $asrama->id_asrama }}" 
                                data-nama="{{ $asrama->nama_asrama }}" 
                                data-bs-toggle="modal" 
                                data-bs-target="#tambahAsramaModal">
                                {{ strtoupper($asrama->nama_asrama) }}
                            </a>

                                    </td>

                                    
                                <td class="text-center">{{ $asrama->created_at }}</td>
                                <td class="text-center">{{ $asrama->updated_at }}</td>
                            </tr>
                    @endforeach
                    </tbody>
            </table>