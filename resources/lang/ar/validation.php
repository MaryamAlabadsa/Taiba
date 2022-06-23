<?php
return array(
    "invoice_number"=>'رقم الفاتورة',
    "valid_snapchat_url"=>' رابط  :attribute',
    'invalid_password_mobile' => 'رقم الجوال او كلمة المرور خاطئة',
    "valid_youtube_url"=>' رابط اليوتيوب  :attribute',
    'accepted' => 'يجب قبول :attribute',
    'active_url' => ':attribute لا يُمثّل رابطًا صحيحًا',
    'after' => 'يجب على :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',
    'after_or_equal' => ':attribute يجب أن يكون تاريخاً لاحقاً أو مطابقاً للتاريخ :date.',
    'alpha' => 'يجب أن لا يحتوي :attribute سوى على حروف',
    'alpha_dash' => 'يجب أن لا يحتوي :attribute سوى على حروف، أرقام ومطّات.',
    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',
    'array' => 'يجب أن يكون :attribute ًمصفوفة',
    'before' => 'يجب على :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',
    'before_or_equal' => ':attribute يجب أن يكون تاريخا سابقا أو مطابقا للتاريخ :date',
    'between' =>
        array(
            'numeric' => 'يجب أن تكون قيمة :attribute بين :min و :max.',
            'file' => 'يجب أن يكون حجم الملف :attribute بين :min و :max كيلوبايت.',
            'string' => 'يجب أن يكون عدد حروف النّص :attribute بين :min و :max',
            'array' => 'يجب أن يحتوي :attribute على عدد من العناصر بين :min و :max',
        ),
    'boolean' => 'يجب أن تكون قيمة :attribute إما true أو false ',
    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',
    'date' => ':attribute ليس تاريخًا صحيحًا',
    'date_format' => 'لا يتوافق :attribute مع الشكل :format.',
    'different' => 'يجب أن يكون الحقلان :attribute و :other مُختلفان',
    'digits' => 'يجب أن يحتوي :attribute على :digits رقمًا/أرقام',
    'digits_between' => 'يجب أن يحتوي :attribute بين :min و :max رقمًا/أرقام ',
    'dimensions' => 'الـ :attribute يحتوي على أبعاد صورة غير صالحة.',
    'distinct' => 'للحقل :attribute قيمة مُكرّرة.',
    'email' => 'الرجاء ادخال بريد الكتروني بصيغة صحيحة',
    'exists' => ' :attribute غير موجودة',
    'file' => 'الـ :attribute يجب أن يكون ملفا.',
    'filled' => ':attribute إجباري',
    'gt' =>
        array(
            'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :max.',
            'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :value كيلوبايت',
            'string' => 'يجب أن يكون طول النّص :attribute أكثر من :value حروفٍ/حرفًا',
            'array' => 'يجب أن يحتوي :attribute على أكثر من :value عناصر/عنصر.',
        ),
    'gte' =>
        array(
            'numeric' => 'يجب أن تكون قيمة :attribute مساوية أو أكبر من :min.',
            'file' => 'يجب أن يكون حجم الملف :attribute على الأقل :value كيلوبايت',
            'string' => 'يجب أن يكون طول النص :attribute على الأقل :value حروفٍ/حرفًا',
            'array' => 'يجب أن يحتوي :attribute على الأقل على :value عُنصرًا/عناصر',
        ),
    'image' => 'يجب أن يكون :attribute صورةً',
    'in' => ':attribute غير موجود',
    'in_array' => ':attribute غير موجود في :other.',
    'integer' => 'يجب أن يكون :attribute عددًا صحيحًا',
    'ip' => 'يجب أن يكون :attribute عنوان IP صحيحًا',
    'ipv4' => 'يجب أن يكون :attribute عنوان IPv4 صحيحًا.',
    'ipv6' => 'يجب أن يكون :attribute عنوان IPv6 صحيحًا.',
    'json' => 'يجب أن يكون :attribute نصآ من نوع JSON.',
    'lt' =>
        array(
            'numeric' => 'يجب أن تكون قيمة :attribute أصغر من :max.',
            'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :value كيلوبايت',
            'string' => 'يجب أن يكون طول النّص :attribute أقل من :value حروفٍ/حرفًا',
            'array' => 'يجب أن يحتوي :attribute على أقل من :value عناصر/عنصر.',
        ),
    'lte' =>
        array(
            'numeric' => 'يجب أن تكون قيمة :attribute مساوية أو أصغر من :max.',
            'file' => 'يجب أن لا يتجاوز حجم الملف :attribute :max كيلوبايت',
            'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',
            'array' => 'يجب أن لا يحتوي :attribute على أكثر من :max عناصر/عنصر.',
        ),
    'max' =>
        array(
            'numeric' => 'قيمة الحقل المدخلة كبيرة جداً الرجاء اختيار قيمة اصغر',
            'file' => 'يجب أن لا يتجاوز حجم الملف :attribute :max كيلوبايت',
            'string' => 'طول النص المدخل طويل جداً الرجاء اختيار نص اقصر',
            'array' => 'يجب أن لا يحتوي :attribute على أكثر من :max عناصر/عنصر.',
        ),
    'mimes' => 'يجب أن يكون ملفًا من نوع : :values.',
    'mimetypes' => 'يجب أن يكون ملفًا من نوع : :values.',
    'min' =>
        array(
            'numeric' => 'قيمة الحقل المدخلة صغيرة جداً الرجاء اختيار قيمة اكبر',
            'file' => 'يجب أن يكون حجم الملف :attribute على الأقل :min كيلوبايت',
            'string' => 'طول النص المدخل قصير جداً الرجاء اختيار نص اكبر',
            'array' => 'يجب أن يحتوي :attribute على الأقل على :min عُنصرًا/عناصر',
        ),
    'not_in' => ':attribute موجود',
    'not_regex' => 'صيغة :attribute غير صحيحة.',
    'numeric' => 'من فضلك ادخل ارقام فقط',
    'present' => 'يجب تقديم :attribute',
    'regex' => 'صيغة :attribute .غير صحيحة',
    'required' => 'من فضلك ادخل :attribute .',
    'required_if' => ':attribute مطلوب في حال ما إذا كان :other يساوي :value.',
    'required_unless' => ':attribute مطلوب في حال ما لم يكن :other يساوي :values.',
    'required_with' => ':attribute مطلوب إذا توفّر :values.',
    'required_with_all' => ':attribute مطلوب إذا توفّر :values.',
    'required_without' => ':attribute مطلوب إذا لم يتوفّر :values.',
    'required_without_all' => ':attribute مطلوب إذا لم يتوفّر :values.',
    'same' => 'يجب أن يتطابق :attribute مع :other',
    'size' =>
        array(
            'numeric' => 'يجب أن تكون قيمة :attribute مساوية لـ :size',
            'file' => 'يجب أن يكون حجم الملف :attribute :size كيلوبايت',
            'string' => 'يجب أن يحتوي النص :attribute على :size حروفٍ/حرفًا بالضبط',
            'array' => 'يجب أن يحتوي :attribute على :size عنصرٍ/عناصر بالضبط',
        ),
    'string' => 'يجب أن يكون :attribute نصآ.',
    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',
    'unique' => 'قيمة :attribute مُستخدمة من قبل',
    'uploaded' => 'فشل في تحميل الـ :attribute',
    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_policy' => 'الرجاء ادخال كمة مرور مكونة من 6 خانات على الاقل',
    'valid_string' => 'من فضلك ادخل حروف انجليزية فقط',
    'valid_string_arabic' => 'من فضلك ادخل حروف عربية فقط',
    'valid_url' => 'من فضلك ادخل رابط صحيح',
    'valid_google_play' => ' من فضلك ادخل رابط صحيح على متجر قوقل',
    'valid_app_store' => ' من فضلك ادخل رابط صحيح على متجر ابل',
    'valid_facebook_url' => ' من فضلك ادخل رابط فيسبوك صحيح',
    'valid_twitter_url' => ' من فضلك ادخل رابط تويتر صحيح',
    'valid_instagram_url' => ' من فضلك ادخل رابط انستاجرام صحيح',

    'valid_mobile_prefix' => 'من فضلك ادخل رقم جوال صحيح مكون من :count خانات مبدوء ب :prefix',
    'valid_mobile_start_digit' => 'من فضلك ادخل رقم جوال صحيح مكون من :count خانات مبدوء ب :start_digit',
    'valid_mobile_length' => 'من فضلك ادخل رقم جوال صحيح مكون من :count خانات',
    'valid_mobile_length_9' => 'من فضلك ادخل رقم جوال صحيح مكون من 9 خانات',
    'valid_whatsapp_length_9' => 'من فضلك ادخل رقم الواتس صحيح مكون من 9 خانات',
    'mobile_must_be_number' => 'الرجاء إدخال رقم.',
    'valid_email' => 'الرجاء إدخال قيمة إيميل صحيحة',
    'this_filed_should_be_number' => 'الرجاء إدخال أرقام',

    'custom' =>
        array(
            'attribute-name' =>
                array(
                    'rule-name' => 'custom-message',
                ),

        ),
    'attributes' =>
        array(
            'invoice_number'=>'رقم الفاتورة',
            'customer'=>'الزبون',
            'comment_details'=>'التعليق',
            'main_video'=>'الفيديو الرئيسي',
            'image'=>'الصورة',
            'details'=>'التفاصيل',
            'ad_id'=>'الاعلان',
            'products'=>'المنتجات',
            'images'=>'الصور',
            'title'=>'العنوان',
            'description'=>'الوصف',
            'city_id'=>'المدينة',
            'main_category_id'=>'التصنيف الرئيسي',
            'type'=>'النوع',
            'name' => 'الاسم',
            'name_en' => 'الاسم بالانجليزي',
            'about' => 'عن المتجر',
            'about_en' => 'عن المتجر بالانجليزي',
            'username' => 'اسم المُستخدم',
            'email' => 'البريد الالكتروني',
            'first_name' => 'الاسم الأول',
            'last_name' => 'اسم العائلة',
            'password' => 'كلمة السر',
            'password_confirmation' => 'تأكيد كلمة السر',
            'city' => 'المدينة',
            'country' => 'الدولة',
            'address' => 'عنوان السكن',
            'phone' => 'الهاتف',
            'mobile' => 'الجوال',
            'age' => 'العمر',
            'sex' => 'الجنس',
            'gender' => 'النوع',
            'day' => 'اليوم',
            'month' => 'الشهر',
            'year' => 'السنة',
            'hour' => 'ساعة',
            'minute' => 'دقيقة',
            'second' => 'ثانية',
            'title' => 'العنوان',
            'content' => 'المُحتوى',
            'description' => 'الوصف',
            'excerpt' => 'المُلخص',
            'date' => 'التاريخ',
            'time' => 'الوقت',
            'available' => 'مُتاح',
            'size' => 'المقاس',
            'uploaded_image_name' => 'الصورة',
            'user_name' => 'اسم المستخدم',
            'g-recaptcha-response' => 'لست روبوت',
            'name_ar' => 'الاسم بالعربية',
            'details_en' => 'التفاصيل بالانجليزية',
            'details_ar' => 'التفاصيل بالعربية',
            'features_ar' => 'المميزات بالعربية',
            'features_en' => 'المميزات بالانجليزية',
            'short_description_en' => 'التفاصيل مختصر بالانجليزية',
            'short_description_ar' => 'التفاصيل مختصر بالعربية',
            'project_category_id' => 'التصنيف',
            'price' => 'السعر',
            'sell_type' => 'نوع البع',
            'apple' => 'رابط متجر ابل',
            'uploaded_multi_image_name' => 'الصور',
            'uploaded_image_name2' => 'الصورة الثانية',
            'title_with_imoje' => 'العنوان',
            'message_with_imoje' => 'نص الاشعار',
            'colors' => 'لون',
            'sizes' => 'مقاس',
            'code' => 'كود',
            'logo' => 'شعار',
            'color_ar' => 'اللون باللغة العربية',
            'color_en' => 'اللون باللغة الانجليزية',
            'size_ar' => 'المقاس باللغة العربية',
            'size_en' => 'المقاس باللغة الانجليزية',
            'return_policy_ar' => 'سياسة الارجاع باللغة العربية',
            'return_policy_en' => 'سياسة الارجاع باللغة الانجليزية',
            'whatsapp' => 'واتس اب',
            'annotation_ar' => 'النص',
            'annotation_en' => 'النص',
            'project_name_ar' => 'اسم التطبيق بالعربية',
            'project_name_en' => 'اسم التطبيق بالانجليزية',
            'internal_shipping_cost'=>'تكلفة الشحن الداخلية',
            'external_shipping_cost'=>'تكلفة الشحن الخارجية',
            'referral_register_points'=>'عدد النقاط لكل تسجيل جديد بالبرومو كود',
            'points_to_cash_one_sar'=>'عدد النقاط مقابل الريال الواحد',
            'snapchat'=>'سناب شات',

            'def_image' => 'صورة',
            'url' =>
                array(
                    '*' => 'الرابط ',
                ),
            'lang' =>
                array(
                    '*' => 'اللغة',
                ),
            'confirm_password' => 'تأكيد كلمة المرور',
            'uploaded_file' => 'الملف',
            'old_password' => 'كلمة المرور القديمة',
            'new_password' => 'كلمة المرور الجديدة',
            'persons_count' => 'عدد الاشخاص',
            'travel_id' => 'الرحلة',
            'date_id' => 'التاريخ',
            'bed_type' => 'نوع السرير',
            'travel_type' => 'نوع الرحلة',
            'receive_pass' => 'استلام الجواز',
            'payment_type' => 'طريقة الدفع',
            'children_count' => 'عدد الاطفال',
            'country_id' => 'الدولة',
            'city_id' => 'المدينة',
            'date_from' => 'التاريخ من',
            'date_to' => 'التاريخ الى',
            'order_id' => 'رقم الطلب',
            'transaction_id' => 'رقم الحوالة',
            'transaction_image' => 'صورة الحوالة',
            'address_id' => 'العنوان',
            'iban' => 'الاي بان',
            'work_day_from' => 'ايام العمل من',
            'work_day_to' => 'ايام العمل الى',
            'max_period_to_receve_orders' => 'اقصى مدة لاستقبال الطلبات',
            'minimum_payment_percentage' => 'نسبة الدفعة المقدمة',
            'work_hours_from' => 'ساعات العمل من',
            'work_hours_to' => 'ساعات العمل الى',
            'departments' =>
                array(
                    '*' => 'احد التصنيفات',
                ),
            'cities' =>
                array(
                    '*' => 'احد المدن',
                ),
            'payment_types' => 'طرق الدفع',
            'delivery_price' => 'رسوم التوصيل',
            'currency_ar' => 'العملة بالعربية',
            'currency_en' => 'العملة بالانجليزية',
            'store_id' => 'المتجر',
            'category_id' => 'التصنيف',
            'ios_link' => 'رابط التطبيق متجر آب ستور',
            'android_link' => 'رابط التطبيق متجر بلي ستور',
            'facebook' => 'فيس بووك',
            'twitter' => 'تويتر',
            'instagram' => 'انيستاجرام',
            'app_is_active' => 'هل التطبيق فعال ؟',
            'title_ar' => 'العنوان عربي',
            'title_en' => 'العنوان انجليزي',
            'description_ar' => 'التفاصيل عربي',
            'description_en' => 'التفاصيل انجليزي',
            'user_id' => 'المستخدم',
            'sub_category_id' => 'التصنيف الفرعي',
            'service_type_id' => 'نوع الخدمة',
            'period_type' => ' المدة',
            'period_value' => 'قيمة المدة',
            'is_chatable' => 'المحادثة',
            'attachments' => 'المرفقات',
            'permission' => 'صلاحية',
            'permissions' => 'صلاحيات',
            'reservation_type_id' => 'نوع الحجز',
            'vehicle_number' => 'عدد المركبات',
            'vehicle_type' => 'نوع المركبة',
            'trip_type' => 'نوع الرحلة',
            'arrival_time' => 'وقت الذهاب',
            'return_time' => 'وقت العودة',
            'going_driver_id' => 'سائق الذهاب',
            'back_driver_id' => 'سائق العودية',
            'reservation_type_text' => 'نوع الحجز مخصص',
            'is_new_customer' => ' زبون جديد',
            'customer_name' => 'اسم الزبون',
            'customer_mobile' => 'رقم الزبون',
            'false' => 'لا',
            'state' => 'المنطقة',
            'collector_driver' => 'جهة التحصيل',
            'reserved_driver' => 'جهةالحجز',

        ),
);
