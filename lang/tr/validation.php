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

    'accepted' => ':attribute kabul edilmelidir.',
    'accepted_if' => ':attribute, :other :value olduğunda kabul edilmelidir.',
    'active_url' => ':attribute geçerli bir URL olmalıdır.',
    'after' => ':attribute değeri :date tarihinden sonra olmalıdır.',
    'after_or_equal' => ':attribute değeri :date tarihinden sonra veya eşit olmalıdır.',
    'alpha' => ':attribute sadece harflerden oluşmalıdır.',
    'alpha_dash' => ':attribute sadece harfler, rakamlar ve tirelerden oluşmalıdır.',
    'alpha_num' => ':attribute sadece harfler ve rakamlar içermelidir.',
    'array' => ':attribute dizi olmalıdır.',
    'before' => ':attribute değeri :date tarihinden önce olmalıdır.',
    'before_or_equal' => ':attribute değeri :date tarihinden önce veya eşit olmalıdır.',
    'between' => [
        'array' => ':attribute, :min ve :max arasında olmalıdır.',
        'file' => ':attribute :min ve :max kilobaytlar arasında olmalıdır.',
        'numeric' => ':attribute :min ve :max arasında olmalıdır.',
        'string' => ':attribute :min ve :max karakterleri arasında olmalıdır.',
    ],
    'boolean' => ':attribute sadece doğru veya yanlış olmalıdır.',
    'confirmed' => ':attribute tekrarı eşleşmiyor.',
    'current_password' => 'Parola hatalı.',
    'date' => ':attribute geçerli bir tarih olmalıdır.',
    'date_equals' => ':attribute ile :date aynı tarihler olmalıdır.',
    'date_format' => ':attribute :format biçimi ile eşleşmiyor.',
    'declined' => ':attribute kabul edilmemelidir.',
    'declined_if' => ':attribute, :other :value olduğunda kabul edilmemelidir.',
    'different' => ':attribute ile :other birbirinden farklı olmalıdır.',
    'digits' => ':attribute :digits rakamlardan oluşmalıdır.',
    'digits_between' => ':attribute :min ve :max basamakları arasında olmalıdır.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => ':attribute alanı yinelenen bir değere sahip.',
    'doesnt_end_with' => ':attribute aşağıdakilerden biriyle bitemez: :values.',
    'doesnt_start_with' => ':attribute aşağıdakilerden biriyle başlamamalıdır: :values.',
    'email' => ':attribute alanına girilen e-posta adresi geçersiz.',
    'ends_with' => ':attribute, şunlardan biriyle bitmelidir :values',
    'enum' => 'Seçili :attribute geçersiz.',
    'exists' => 'Seçili :attribute geçersiz.',
    'file' => ':attribute dosya olmalıdır.',
    'filled' => ':attribute alanının doldurulması zorunludur.',
    'gt' => [
        'array' => ':attribute, :value taneden fazla olmalı.',
        'file' => ':attribute, :value kilobayt boyutundan büyük olmalı.',
        'numeric' => ':attribute, :value değerinden büyük olmalı.',
        'string' => ':attribute, :value karakterden uzun olmalı.',
    ],
    'gte' => [
        'array' => ':attribute, :value tane veya daha fazla olmalı.',
        'file' => ':attribute, :value kilobayt boyutu kadar veya daha büyük olmalı.',
        'numeric' => ':attribute, :value kadar veya daha fazla olmalı.',
        'string' => ':attribute, :value karakter kadar veya daha uzun olmalı.',
    ],
    'image' => ':attribute alanı resim dosyası olmalıdır.',
    'in' => ':attribute değeri geçersiz.',
    'in_array' => ':attribute alanı :other içinde mevcut değil.',
    'integer' => ':attribute tamsayı olmalıdır.',
    'ip' => ':attribute geçerli bir IP adresi olmalıdır.',
    'ipv4' => ':attribute geçerli bir IPv4 adresi olmalıdır.',
    'ipv6' => ':attribute geçerli bir IPv6 adresi olmalıdır.',
    'json' => ':attribute geçerli bir JSON değişkeni olmalıdır.',
    'lt' => [
        'array' => ':attribute, :value taneden az olmalı.',
        'file' => ':attribute, :value kilobayt boyutundan küçük olmalı.',
        'numeric' => ':attribute, :value değerinden küçük olmalı.',
        'string' => ':attribute, :value karakterden kısa olmalı.',
    ],
    'lte' => [
        'array' => ':attribute, :value tane veya daha az olmalı.',
        'file' => ':attribute, :value kilobayt boyutu kadar veya daha küçük olmalı.',
        'numeric' => ':attribute, :value kadar veya daha küçük olmalı.',
        'string' => ':attribute, :value karakter kadar veya daha kısa olmalı.',
    ],
    'mac_address' => ':attribute geçerli bir MAC adresi olmalıdır.',
    'max' => [
        'array' => ':attribute en çok :max nesneye sahip olmalıdır.',
        'file' => ':attribute boyutu en çok :max kilobayt olmalıdır.',
        'numeric' => ':attribute değeri en çok :max olmalıdır.',
        'string' => ':attribute uzunluğu en çok :max karakter olmalıdır.',
    ],
    'max_digits' => ':attribute en fazla :max basamak içermelidir.',
    'mimes' => ':attribute dosya biçimi :values olmalıdır.',
    'mimetypes' => ':attribute dosya biçimi :values olmalıdır.',
    'min' => [
        'array' => ':attribute en az :min nesneye sahip olmalıdır.',
        'file' => ':attribute boyutu en az :min kilobayt olmalıdır.',
        'numeric' => ':attribute değeri en az :min olmalıdır.',
        'string' => ':attribute uzunluğu en az :min karakter olmalıdır.',
    ],
    'min_digits' => ':attribute en az :min basamak içermelidir.',
    'multiple_of' => 'attribute, :value değerinin katları olmalıdır.',
    'not_in' => 'Seçili :attribute geçersiz.',
    'not_regex' => ':attribute biçimi geçersiz.',
    'numeric' => ':attribute sayı olmalıdır.',
    'password' => [
        'letters' => ':attribute en az bir harf içermelidir.',
        'mixed' => ':attribute en az bir büyük harf ve bir küçük harf içermelidir.',
        'numbers' => ':attribute en az bir sayı içermelidir.',
        'symbols' => ':attribute en az bir sembol içermelidir.',
        'uncompromised' => 'Verilen :attribute bir veri sızıntısında ortaya çıktı. Lütfen farklı bir :özellik seçin.',
    ],
    'present' => ':attribute alanı mevcut olmalıdır.',
    'prohibited' => ':attribute alanını gönderemezsiniz.',
    'prohibited_if' => ':other değeri :value olduğunda :attribute alanını gönderemezsiniz.',
    'prohibited_unless' => 'Değerler\'de :other olmadığı sürece :attribute alanını gönderemezsiniz.',
    'prohibits' => ':attribute alanı ile :other alanını birlikte gönderemezsiniz.',
    'regex' => ':attribute biçimi geçersiz.',
    'required' => ':attribute alanı gereklidir.',
    'required_array_keys' => ':attribute alanı, :değerler için girişler içermelidir.',
    'required_if' => ':attribute alanı, :other :value değerine sahip olduğunda zorunludur.',
    'required_if_accepted' => ':attribute alanı, :other alanı kabul edildiğinde zorunludur.',
    'required_unless' => ':attribute alanı, :other alanı :value değerlerinden birine sahip olmadığında zorunludur.',
    'required_with' => ':attribute alanı :values varken zorunludur.',
    'required_with_all' => ':attribute alanı herhangi bir :values değeri varken zorunludur.',
    'required_without' => ':attribute alanı :values yokken zorunludur.',
    'required_without_all' => ':attribute alanı :values değerlerinden herhangi biri yokken zorunludur.',
    'same' => ':attribute ile :other eşleşmelidir.',
    'size' => [
        'array' => ':attribute :size nesneye sahip olmalıdır.',
        'file' => ':attribute :size kilobyte olmalıdır.',
        'numeric' => ':attribute :size olmalıdır.',
        'string' => ':attribute :size karakter olmalıdır.',
    ],
    'starts_with' => ':attribute şunlardan biri ile başlamalıdır: :values',
    'string' => ':attribute dizge olmalıdır.',
    'timezone' => ':attribute geçerli bir saat dilimi olmalıdır.',
    'unique' => ':attribute daha önceden kayıt edilmiş.',
    'uploaded' => ':attribute yüklemesi başarısız.',
    'url' => ':attribute biçimi geçersiz.',
    'uuid' => ':attribute bir UUID formatına uygun olmalı.',

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
        'name' => 'isim',
        'password' => 'parola',
        'email' => 'E-posta',
        'firstname' => 'isim',
        'lastname' => 'soyisim',
        'phone' => 'telefon',
        'gender' => 'cinsiyet',
        'company_id' => 'fabrika',
    ],
];
