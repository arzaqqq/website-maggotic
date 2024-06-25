<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="flex flex-col items-center mt-20 mb-10">
    <h1 class="text-maggotic font-bold text-3xl mb-4">MAGGOTIC</h1>
    <p class="text-center mx-16 text-[24px]">Di sini, Anda dapat menemukan lokasi pengepul sampah yang khusus
        mengumpulkan makanan
        manggot. Jelajahi peta dan
        temukan daerah-daerah di mana Anda dapat berkontribusi dalam menjaga lingkungan dengan mendaur ulang sisa
        makanan menjadi pakan manggot.</p>
</div>

<div class="container mx-auto flex flex-col items-center">
    <div class="relative mb-4">
        <select id="regionDropdown"
            class="appearance-none rounded py-4 ps-5 pe-10 border-2 border-blue-600 focus:outline-none pr-8">
            <option value="sumatera_barat" selected>Sumatera Barat</option>
            <option value="aceh">Aceh</option>
            <option value="sumatera_utara">Sumatera Utara</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 pe-4 flex items-center text-blue-600">
            <img width="20" height="20" src="https://img.icons8.com/ios-glyphs/30/228BE6/sort-down.png"
                alt="sort-down" />
        </div>
    </div>
    <div id="locations" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 cursor-pointer mb-24  lg:w-[970px]">
    </div>
</div>


<script>
const locations = {
    sumatera_barat: [{
            name: 'Kota Padang',
            address: 'Jalan Raya Solok-Padang Km. 20 Arosuka',
            phone: '0812-7272-9898'
        },
        {
            name: 'Kabupaten Solok',
            address: 'Kelurahan Padang Karambia',
            phone: '0812-7272-9898'
        },
        {
            name: 'Kota Bukit Tinggi',
            address: 'JL. Panjung Selatan',
            phone: '0812-7272-9898'
        },
        {
            name: 'Kabupaten Payukumbuh',
            address: 'JL. Selatan Timur',
            phone: '0812-7667-9898'
        },
        {
            name: 'Kabupaten Padang Panjang',
            address: 'JL. Padang Pendek',
            phone: '0812-7667-9090'
        },
        {
            name: 'Kabupaten Padang Panjang',
            address: 'JL. Padang Pendek',
            phone: '0812-7667-9090'
        }
    ],
    aceh: [{
            name: 'Kota Banda Aceh',
            address: 'Jalan Teuku Umar',
            phone: '0812-1234-5678'
        },
        {
            name: 'Kabupaten Aceh Besar',
            address: 'JL. Sultan Iskandar Muda',
            phone: '0812-2345-6789'
        },
        {
            name: 'Kota Lhokseumawe',
            address: 'JL. Merdeka',
            phone: '0812-3456-7890'
        },
        {
            name: 'Kabupaten Bireuen',
            address: 'JL. Nasional',
            phone: '0812-4567-8901'
        },
        {
            name: 'Kota Langsa',
            address: 'JL. Cut Nyak Dhien',
            phone: '0812-5678-9012'
        },
        {
            name: 'Kota Subussalam',
            address: 'Jl. Teuku Umar, Penanggalan',
            phone: ' 081391546240'
        }
    ],
    sumatera_utara: [{
            name: 'Kota Medan',
            address: 'JL. Gatot Subroto',
            phone: '0812-6789-0123'
        },
        {
            name: 'Kabupaten Deli Serdang',
            address: 'JL. Sudirman',
            phone: '0812-7890-1234'
        },
        {
            name: 'Kota Binjai',
            address: 'JL. T Amir Hamzah',
            phone: '0812-8901-2345'
        },
        {
            name: 'Kabupaten Simalungun',
            address: 'JL. Parapat',
            phone: '0812-9012-3456'
        },
        {
            name: 'Kota Pematangsiantar',
            address: 'JL. Sisingamangaraja',
            phone: '0812-0123-4567'
        },
        {
            name: 'Kota Pematangsiantar',
            address: 'JL. Sisingamangaraja',
            phone: '0812-0123-4567'
        }
    ]
};

function displayLocations(region) {
    const locationContainer = $('#locations');
    locationContainer.empty();
    if (region && locations[region]) {
        locations[region].forEach(location => {
            const locationCard = `
                <div class="border rounded p-4">
                    <h3 class="text-lg font-bold">${location.name}</h3>
                    <p>${location.address}</p>
                    <p>${location.phone}</p>
                </div>
            `;
            locationContainer.append(locationCard);
        });
    }
}

$('#regionDropdown').change(function() {
    const region = $(this).val();
    displayLocations(region);
});

// Initial load
$(document).ready(function() {
    displayLocations('sumatera_barat');
});
</script>

<?= $this->endSection('content'); ?>