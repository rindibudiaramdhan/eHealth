<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'Data :attribute harus diterima.',
    'accepted_if' => 'Data :attribute harus diterima jika :other adalah :value.',
    'active_url' => 'Data :attribute harus URL yang valid.',
    'after' => 'Data :attribute harus tanggal setelah :date.',
    'after_or_equal' => 'Data :attribute harus tanggal setelah atau sama dengan :date.',
    'alpha' => 'Data :attribute harus hanya berisi huruf.',
    'alpha_dash' => 'Data :attribute harus hanya berisi huruf, angka, tanda hubung, dan garis bawah.',
    'alpha_num' => 'Data :attribute harus hanya berisi huruf dan angka.',
    'array' => 'Data :attribute harus berupa array.',
    'ascii' => 'Data :attribute harus hanya berisi karakter alfanumerik satu byte dan simbol.',
    'before' => 'Data :attribute harus tanggal sebelum :date.',
    'before_or_equal' => 'Data :attribute harus tanggal sebelum atau sama dengan :date.',
    'between' => [
        'array' => 'Data :attribute harus memiliki antara :min dan :max item.',
        'file' => 'Data :attribute harus antara :min dan :max kilobit.',
        'numeric' => 'Data :attribute harus antara :min dan :max.',
        'string' => 'Data :attribute harus antara :min dan :max karakter.',
    ],
    'boolean' => 'Data :attribute harus true atau false.',
    'can' => 'Data :attribute berisi nilai yang tidak diizinkan.',
    'confirmed' => 'Konfirmasi bidang :attribute tidak cocok.',
    'contains' => 'Data :attribute kehilangan nilai yang diperlukan.',
    'current_password' => 'Kata sandi salah.',
    'date' => 'Data :attribute harus tanggal yang valid.',
    'date_equals' => 'Data :attribute harus tanggal yang sama dengan :date.',
    'date_format' => 'Data :attribute harus sesuai dengan format :format.',
    'decimal' => 'Data :attribute harus memiliki :decimal tempat desimal.',
    'declined' => 'Data :attribute harus ditolak.',
    'declined_if' => 'Data :attribute harus ditolak saat :other adalah :value.',
    'different' => 'Data :attribute dan :other harus berbeda.',
    'digits' => 'Data :attribute harus :digits digit.',
    'digits_between' => 'Data :attribute harus antara :min dan :max digit.',
    'dimensions' => 'Data :attribute memiliki dimensi gambar yang tidak valid.',
    'distinct' => 'Data :attribute memiliki nilai duplikat.',
    'doesnt_end_with' => 'Data :attribute tidak boleh diakhiri dengan salah satu dari: :values.',
    'doesnt_start_with' => 'Data :attribute tidak boleh dimulai dengan salah satu dari: :values.',
    'email' => 'Data :attribute harus alamat email yang valid.',
    'ends_with' => 'Data :attribute harus diakhiri dengan salah satu dari: :values.',
    'enum' => 'Pilihan :attribute yang dipilih tidak valid.',
    'exists' => 'Pilihan :attribute yang dipilih tidak valid.',
    'extensions' => 'Data :attribute harus memiliki salah satu ekstensi berikut: :values.',
    'file' => 'Data :attribute harus berupa file.',
    'filled' => 'Data :attribute harus memiliki nilai.',
    'gt' => [
        'array' => 'Data :attribute harus memiliki lebih dari :value item.',
        'file' => 'Data :attribute harus lebih besar dari :value kilobit.',
        'numeric' => 'Data :attribute harus lebih besar dari :value.',
        'string' => 'Data :attribute harus lebih besar dari :value karakter.',
    ],
    'gte' => [
        'array' => 'Data :attribute harus memiliki :value item atau lebih.',
        'file' => 'Data :attribute harus lebih besar dari atau sama dengan :value kilobit.',
        'numeric' => 'Data :attribute harus lebih besar dari atau sama dengan :value.',
        'string' => 'Data :attribute harus lebih besar dari atau sama dengan :value karakter.',
    ],
    'hex_color' => 'Data :attribute harus warna heksadesimal yang valid.',
    'image' => 'Data :attribute harus berupa gambar.',
    'in' => 'Pilihan :attribute yang dipilih tidak valid.',
    'in_array' => 'Data :attribute harus ada di :other.',
    'integer' => 'Data :attribute harus merupakan bilangan bulat.',
    'ip' => 'Data :attribute harus alamat IP yang valid.',
    'ipv4' => 'Data :attribute harus alamat IPv4 yang valid.',
    'ipv6' => 'Data :attribute harus alamat IPv6 yang valid.',
    'json' => 'Data :attribute harus string JSON yang valid.',
    'list' => 'Data :attribute harus sebuah daftar.',
    'lowercase' => 'Data :attribute harus huruf kecil.',
    'lt' => [
        'array' => 'Data :attribute harus memiliki kurang dari :value item.',
        'file' => 'Data :attribute harus kurang dari :value kilobit.',
        'numeric' => 'Data :attribute harus kurang dari :value.',
        'string' => 'Data :attribute harus kurang dari :value karakter.',
    ],
    'lte' => [
        'array' => 'Data :attribute tidak boleh memiliki lebih dari :value item.',
        'file' => 'Data :attribute harus kurang dari atau sama dengan :value kilobit.',
        'numeric' => 'Data :attribute harus kurang dari atau sama dengan :value.',
        'string' => 'Data :attribute harus kurang dari atau sama dengan :value karakter.',
    ],
    'mac_address' => 'Data :attribute harus alamat MAC yang valid.',
    'max' => [
        'array' => 'Data :attribute tidak boleh memiliki lebih dari :max item.',
        'file' => 'Data :attribute tidak boleh lebih besar dari :max kilobit.',
        'numeric' => 'Data :attribute tidak boleh lebih besar dari :max.',
        'string' => 'Data :attribute tidak boleh lebih besar dari :max karakter.',
    ],
    'max_digits' => 'Data :attribute tidak boleh memiliki lebih dari :max digit.',
    'mimes' => 'Data :attribute harus berupa file dengan tipe: :values.',
    'mimetypes' => 'Data :attribute harus berupa file dengan tipe: :values.',
    'min' => [
        'array' => 'Data :attribute harus memiliki setidaknya :min item.',
        'file' => 'Data :attribute harus setidaknya :min kilobit.',
        'numeric' => 'Data :attribute harus setidaknya :min.',
        'string' => 'Data :attribute harus setidaknya :min karakter.',
    ],
    'min_digits' => 'Data :attribute harus memiliki setidaknya :min digit.',
    'missing' => 'Data :attribute harus hilang.',
    'missing_if' => 'Data :attribute harus hilang ketika :other adalah :value.',
    'missing_unless' => 'Data :attribute harus hilang kecuali :other adalah :value.',
    'missing_with' => 'Data :attribute harus hilang ketika :values hadir.',
    'missing_with_all' => 'Data :attribute harus hilang ketika :values hadir semua.',
    'multiple_of' => 'Data :attribute harus merupakan kelipatan dari :value.',
    'not_in' => 'Pilihan :attribute yang dipilih tidak valid.',
    'not_regex' => 'Format bidang :attribute tidak valid.',
    'numeric' => 'Data :attribute harus berupa angka.',
    'password' => [
        'letters' => 'Data :attribute harus mengandung setidaknya satu huruf.',
        'mixed' => 'Data :attribute harus mengandung setidaknya satu huruf besar dan satu huruf kecil.',
        'numbers' => 'Data :attribute harus mengandung setidaknya satu angka.',
        'symbols' => 'Data :attribute harus mengandung setidaknya satu simbol.',
        'uncompromised' => ':attribute yang diberikan telah muncul dalam kebocoran data. Silakan pilih :attribute yang berbeda.',
    ],
    'present' => 'Data :attribute harus hadir.',
    'present_if' => 'Data :attribute harus hadir ketika :other adalah :value.',
    'present_unless' => 'Data :attribute harus hadir kecuali :other adalah :value.',
    'present_with' => 'Data :attribute harus hadir ketika :values hadir.',
    'present_with_all' => 'Data :attribute harus hadir ketika :values hadir semua.',
    'prohibited' => 'Data :attribute dilarang.',
    'prohibited_if' => 'Data :attribute dilarang ketika :other adalah :value.',
    'prohibited_unless' => 'Data :attribute dilarang kecuali :other ada di :values.',
    'prohibits' => 'Data :attribute melarang :other dari kehadiran.',
    'regex' => 'Format bidang :attribute tidak valid.',
    'required' => 'Data :attribute wajib diisi.',
    'required_array_keys' => 'Data :attribute harus berisi entri untuk: :values.',
    'required_if' => 'Data :attribute wajib diisi ketika :other adalah :value.',
    'required_if_accepted' => 'Data :attribute wajib diisi ketika :other diterima.',
    'required_if_declined' => 'Data :attribute wajib diisi ketika :other ditolak.',
    'required_unless' => 'Data :attribute wajib diisi kecuali :other ada di :values.',
    'required_with' => 'Data :attribute wajib diisi ketika :values hadir.',
    'required_with_all' => 'Data :attribute wajib diisi ketika :values hadir semua.',
    'required_without' => 'Data :attribute wajib diisi ketika :values tidak hadir.',
    'required_without_all' => 'Data :attribute wajib diisi ketika tidak ada satu pun dari :values yang hadir.',
    'same' => 'Data :attribute harus sama dengan :other.',
    'size' => [
        'array' => 'Data :attribute harus berisi :size item.',
        'file' => 'Data :attribute harus berukuran :size kilobit.',
        'numeric' => 'Data :attribute harus berukuran :size.',
        'string' => 'Data :attribute harus berukuran :size karakter.',
    ],
    'starts_with' => 'Data :attribute harus dimulai dengan salah satu dari berikut ini: :values.',
    'string' => 'Data :attribute harus berupa string.',
    'timezone' => 'Data :attribute harus merupakan zona waktu yang valid.',
    'unique' => 'Data :attribute sudah ada yang menggunakan.',
    'uploaded' => 'Gagal mengunggah :attribute.',
    'uppercase' => 'Data :attribute harus huruf besar.',
    'url' => 'Data :attribute harus berupa URL yang valid.',
    'ulid' => 'Data :attribute harus ULID yang valid.',
    'uuid' => 'Data :attribute harus UUID yang valid.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'medical_record_number' => 'Nomor Rekam Medis',
        'name' => 'Nama Lengkap',
        'birth_date' => 'Tanggal Lahir',
        'gender' => 'Jenis Kelamin',
        'address' => 'Alamat',
        'phone' => 'Nomor Telepon',
        'emergency_contact' => 'Kontak Darurat',
        'blood_type' => 'Golongan Darah',
        'allergies' => 'Alergi',
        'is_active' => 'Status Aktif',

        'patient_id' => 'Pasien',
    ],

];
