<div class="content-sidebar py-3">
    <div class="master">
        <div class="nama-kategori p-2 pl-3">
            <small class="text-muted"><b>Master</b></small>
        </div>
        <ul>
            <li>
                <a href="#" class="aktif"><img src="/asets/images/data.svg" alt=""> Data Master</a>
                <ul>
                    <li>
                        <a href="/harga" @if($title == 'harga') class="aktif" @endif><i class="fas fa-circle pr-2"></i>Harga</a>
                    </li>
                    <li>
                        <a href="/gudang" @if($title == 'gudang') class="aktif" @endif><i class="fas fa-circle pr-2"></i>Gudang</a>
                    </li>
                    <li>
                        <a href="/truk" @if($title == 'truk') class="aktif" @endif><i class="fas fa-circle pr-2"></i>Truk</a>
                    </li>
                    <li>
                        <a href="/driver" @if($title == 'driver') class="aktif" @endif><i class="fas fa-circle pr-2"></i>Driver</a>
                    </li>
                    <li>
                        <a href="/transportir" @if($title == 'transportir') class="aktif" @endif><i class="fas fa-circle pr-2"></i>Transportir</a>
                    </li>
                    <li>
                        <a href="/kota" @if($title == 'kota') class="aktif" @endif><i class="fas fa-circle pr-2"></i>Kota</a>
                    </li>
                    <li>
                        <a href="/users" @if($title == 'users') class="aktif" @endif><i class="fas fa-circle pr-2"></i>Users</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="menu-utama">
        <div class="nama-kategori p-2 pl-3">
            <small class="text-muted"><b>Menu Utama</b></small>
        </div>
        <ul>
            <li>
                <a href="#" class="text-muted"><i class="fas fa-key pr-2"></i> Menu Utama</a>
            </li>
        </ul>
    </div>
</div>
