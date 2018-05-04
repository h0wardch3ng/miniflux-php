<?php

return array(
    'plural' => function($n) { return (($n==0) ? 0 : ($n==1) ? 1 : ($n==2) ? 2 : ($n%100>=3 && $n%100<=10) ? 3 : ($n%100>=11) ? 4 : 5); },
    'attachment' => 'المرفقات',
    'When there is nothing to read, redirect me to this page' => ':عندما تكون كل العناوين قد تمت قرائتها قم بتحويلي مباشرة إلى',
    'There is nothing new to read, enjoy your favorites articles!' => 'ليس هناك شيء جديد للقراءة، ! إستمتع بقراءة مالديك في مفضلاتك',
    // 'There is nothing new to read, enjoy your previous readings!' => '',
    'Immediately' => 'حالاً',
    'The feed id is required' => 'تغذية الخلاصات مطلوب',
    'The title is required' => 'يرجى إدخال العنوان',
    'The site url is required' => 'يرجى إدخال رابط الموقع الإلكتروني',
    'The feed url is required' => 'يرجى إدخال رابط الخلاصات ',
    'or' => 'أو',
    'edit' => 'تحرير',
    'cancel' => 'إلغاء',
    'Feed URL' => ':رابط الخلاصات',
    'Website URL' => ':رابط الموقع الإلكتروني',
    'Title' => ':العنوان',
    'Edit subscription' => 'تحرير الخلاصات',
    'Unable to edit your subscription.' => 'غير قادر على تنفيذ هذه العمليه ... يرجى المحاولة مرة أخرى',
    'Your subscription has been updated.' => 'تمت عملية التحديث بنجاح',
    'Older items first' => 'الأقدم أولاً',
    'Most recent first' => 'الأحدث أولاً',
    'Default sorting order for items' => ':الترتيب الإفتراضي للأخبار',
    'This subscription is empty, %sgo back to unread items%s' => 'هذا الإشتراك فارغ %s .. عودة إلى الأخبار الغير مقرؤه',
    'sort by date %s(%s)%s' => '%s(%s)%sالترتيب بحسب التأريخ',
    'most recent first' => 'الأحدث أولاً',
    'older first' => 'الأقدم أولاً',
    'Show only this subscription' => 'عرض هذا الإشتراك فقط',
    'Go to unread' => 'إذهب إلى الأخبار غير المقروءة',
    'Go to bookmarks' => 'إذهب إلى قائمة العناوين المحفوظة',
    'Go to history' => 'إذهب إلى قائمة أخر العناوين التي تمت زيارتها',
    'Go to subscriptions' => 'الذهاب إلى الإشتراكات',
    'Go to preferences' => 'الذهاب إلى التفضيلات',
    'Bookmarklet' => 'Bookmarklet',
    'Subscribe with Miniflux' => 'للإشتراك بواسطة ميني فلكس',
    'Drag and drop this link to your bookmarks' => 'سحب وإسقاط هذا الرابط إلى المواقع في مفضلاتك',
    'Download full content' => 'تحميل المحتوى كاملاً',
    'Downloading full content is slower because Miniflux grab the content from the original website. You should use that for subscriptions that display only a summary. This feature doesn\'t work with all websites.' => ' يرجى ملاحظة أن عملية تحميل المحتوى كاملاً ستكون بطيئةً ، و ذلك لإن برنامج ميني فلكس يقوم بإستخراج المحتوى من الموقع الأصلي. وعليه، يجب إستخدام هذه الخاصية فقط للمواقع التي لا تقدم خلاصلات بمحتوى كامل  يرجى ملاحظة أن هذه الخاصية قد لا تعمل بشكل جيد مع بعض المواقع الإلكترونية',
    'API endpoint:' => 'API endpoint (خاص بالمطورين): ',
    'API username:' => 'API username (خاص بالمطورين):',
    'API token:' => 'API token (خاص بالمطورين): ',
    'Generate new tokens' => 'Generate new tokens (خاص بالمطورين)',
    'Bookmark RSS Feed' => 'تغذية الخلاصات المفضلة',
    'updated just now' => 'تم التحديث قبل لحظات..',
    'checked at' => 'أخر تحديث في',
    'never updated after creation' => 'عدم التحديث بعد الإنشاء',
    'Subscription disabled' => 'الإشتراك معطل',
    'content downloaded' => 'تحميل المحتوى',
    'in progress...' => ' جاري...',
    'unable to fetch content' => 'غير قادر على تحميل المحتوى',
    'Download content' => 'تحميل المحتوى',
    'download content' => 'تحميل المحتوى',
    'Help' => 'مساعده',
    'Theme' => ':إختيار الواجهات',
    'Items per page' => ':عدد العناوين التي ستظهر في الصفحة الواحدة',
    'Previous page' => 'الصفحة السابقة',
    'Next page' => 'الصفحة التالية',
    'Do not fetch the content of articles' => 'عدم تحميل محتوى الأخبار',
    'Remove automatically read items' => ':الحذف التلقائي للعناوين المقروءة',
    'Never' => 'أبداً',
    'After %d day' => array('بعد %d يوم', 'أيام %d بعد'),
    'unread' => 'غير مقروء',
    'Unread' => 'غير مقروء',
    'bookmark' => 'المحفوظات',
    'remove bookmark' => 'حذف المحفوظات',
    'bookmarks' => 'المحفوظات',
    'Bookmarks' => 'المحفوظات',
    'Bookmark item' => 'العناوين المحفوظة',
    'No bookmark' => 'لا توجد محفوظات',
    'history' => 'العناوين التي تمت قرائتها حديثاً',
    'subscriptions' => 'الإشتراكات',
    'Subscriptions' => 'الإشتراكات',
    'preferences' => 'التفضيلات',
    'Preferences' => 'التفضيلات',
    'logout' => 'خروج',
    'Username' => ':إسم المستخدم',
    'Password' => ':كلمة المرور',
    'Confirmation' => ':تأكيد كلمة المرور',
    'Language' => ':إختيار اللغه',
    'Save' => 'حفظ',
    'Database size:' => ':حجم قاعدة البيانات',
    'Optimize the database' => 'صيانة قاعدة البيانات',
    '(VACUUM command)' => '(أوامرSQL)',
    'Download the entire database' => 'تحميل قاعدة البيانات إلى الجهاز',
    '(Gzip compressed Sqlite file)' => '(ضغط قاعدة البيانات)',
    'Keyboard shortcuts' => 'إختصارات لوحة المفاتيج',
    'Previous item' => 'العنوان السابق',
    'Next item' => 'العنوان التالي',
    'Mark as read or unread' => 'التحديد كمقروء',
    'Open original link' => 'فتح الرابط الأصلي',
    'Open item' => 'فتح العنوان',
    'About' => 'حول هذا البرنامج',
    'Miniflux version:' => 'نسخة الميني فلكس :',
    'Nothing to read' => 'لا يوجد عناوين ',
    'mark all as read' => 'تحديد كل العناوين كمقروءه',
    'original link' => 'الرابط الأصلي',
    'mark as read' => 'تحديد العنوان كمقروء',
    'No history' => 'لا يوجد زيارات حديثه',
    'mark as unread' => 'تحديد العنوان كغير مقروء',
    'History' => 'المقروء حديثاً ',
    'flush all items' => 'مسح كل العناوين',
    'Item not found' => 'العنوان غير موجود',
    'Next' => 'التالي',
    'Previous' => 'السابق',
    'Sign in' => 'تسجيل الدخول',
    'feeds' => 'الخلاصات',
    'add' => 'إضافة',
    'import' => 'إستيراد',
    'export' => 'تصدير',
    'OPML Import' => 'إستيراد من ملف OPML',
    'OPML file' => 'ملف OPML',
    'Import' => 'تصدير',
    'refresh all' => 'تحديث الكل',
    'No subscription' => 'لا توجد خلاصات',
    'remove' => 'حذف',
    'Remove' => 'حذف',
    'refresh' => 'تحديث',
    'New subscription' => 'إشتراك جديد',
    'Website or Feed URL' => 'رابط الموقع الإلكتروني أو رابط الخلاصات',
    'Add' => 'إضافة',
    'http://website/' => 'http://Website/',
    'Official website:' => 'الموقع الأصلي :',
    'Bad username or password' => 'هناك خطأ في إسم المستخدم او كلمة المرور',
    'Unable to update your preferences.' => 'غير قادر على تحديث التفضيلات.',
    'Your preferences are updated.' => 'تم تحديث التفضيلات',
    'Unable to import your OPML file.' => 'غير قادر على الإستيراد من ملف OPML',
    'Your feeds have been imported.' => 'تمت عملية إستيراد الإشتراكات بنجاح',
    'Unable to find a subscription.' => 'غير قادر على إيجاد إشتراكات',
    'Subscription added successfully.' => 'تمت عملية الإشتراك بنجاح',
    'Your subscriptions are updated' => 'تمت عملية تحديث جميع الإشتراكات بنجاح',
    'Unable to remove this subscription.' => 'غير قادر على حذف هذا الإشتراك',
    'This subscription has been removed successfully.' => 'تمت عملية حذف هذا الإشتراك بنجاح',
    'The user name is required' => 'يرجى إدخال إسم المستخدم',
    'The maximum length is 50 characters' => 'الحد الأقصى هو 50 حرف',
    'The password is required' => 'يرجى إدخال كلمة المرور',
    'The minimum length is 6 characters' => 'الحد الأدنى هو 50 حرف',
    'The confirmation is required' => 'يرجى التأكيد',
    'Passwords don\'t match' => 'كلمة المرور التي أدخلتها غير متطابقه',
    'Do you really want to remove these items from your history?' => 'هل أنت متأكد من حذف هذه العناوين من قائمة الأحدث قراءة',
    'Do you really want to remove this subscription: "%s"?' => '؟ %sهل أنت متأكد حقاً من أنك تريد حذف هذا الإشتراك ',
    'Nothing to read, do you want to %supdate your subscriptions%s?' => 'لا توجد عناوين غير مقروءة .. هل تريد تحديث تغذية الخلاصات؟',
    'Show help' => 'عرض المساعده',
    'Close help' => 'إغلاق المساعده',
    '%d second ago' => array('منذو %d ثانيه', '%d ثواني'),
    '%d minute ago' => array('قبل %d دقيقه', '%d دقائق'),
    '%d hour ago' => array('قبل %d ساعه', 'قبل %d ساعات'),
    '%d day ago' => array('قبل %d يوم', '%d يوم'),
    '%d week ago' => array('قبل %d أسبوع', '%d أسابيع'),
    '%d month ago' => 'قبل %d شهر',
    'Timezone' => ':المنطقة الزمنية',
    'Update all subscriptions' => 'تحديث كل الإشتراكات',
    'Remember Me' => 'تذكرني',
    'Display items on lists' => ':عرض العناوين ظمن قائمة ',
    'Summaries' => 'مختصر',
    'Full contents' => 'المحتوى كاملاً',
    'Force RTL mode (Right-to-left language)' => 'إختيار الوضع من اليمين إلى اليسار (اللغات التي تكتب من اليمين إلى اليسار)',
    'Activated' => 'تفعيل',
    'Remove this feed' => 'حذف هذه الخلاصه',
    'Miniflux' => 'ميني فلكس',
    'mini%sflux%s' => 'mini%sflux%s',
    'Advanced' => 'الوضع المتقدم',
    'Documentation' => 'Documentation',
    'Installation instructions' => 'تعليمات تركيب البرنامج',
    'Upgrade to a new version' => 'الترقية إلى نسخة جديده',
    'Cronjob' => 'Cronjob',
    'Advanced configuration' => 'إعدادات متقدمة',
    'Full article download' => 'تحميل محتوى الخبر كاملاً',
    'Themes' => 'الواجهات',
    'Json-RPC API' => 'API Json-RPC',
    'Fever API' => 'Fever API',
    'Translations' => 'الترجمه',
    'Run Miniflux with Docker' => 'تشغيل برنامج ميني فلكس مع برنامج Docker',
    'FAQ' => 'أسئلة و إجابات',
    'help' => 'مساعدة',
    'api' => 'api',
    'about' => 'حول البرنامج',
    'database' => 'قاعدة البيانات',
    'Miniflux API' => 'Miniflux API',
    'menu' => 'قائمة',
    'Default' => 'إفتراضي',
    'Value required' => 'القيمة مطلوبة',
    'Must be an integer' => 'يجب أن تدخل أرقام فقط',
    'Remove automatically unread items' => ':الحذف التلقائي للعناوين الغير مقروءة',
    'Toggle RTL mode' => 'التحويل إلى وضع القراءة من اليمين إلى اليسار',
    'external services' => 'خدمات خارجية',
    'Send bookmarks to Pinboard' => 'إرسال المحفوظات إلى  Pinboard',
    'Pinboard API token' => 'Pinboard API token',
    'Pinboard tags' => 'Tags Pinboard',
    'Instapaper username' => 'إسم المستخدم الخاص ببرنامج Instapaper',
    'Instapaper password' => 'كلمة المرور الخاصة ببرنامج Instapaper',
    'Instapaper' => 'Instapaper',
    'Pinboard' => 'Pinboard',
    'Send bookmarks to Instapaper' => ' إرسال المحفوظات إلىInstapaper',
    'Authentication' => 'المصادقة على الدخول للبرنامج',
    'Reading' => 'القراءة',
    'Application' => 'البرنامج',
    'Enable image proxy' => 'تفعيل البروكسي للصور',
    'Avoid mixed content warnings with HTTPS' => 'لتجنب التحذيرات الخاصة بـ HTTPS',
    'Download favicons' => 'تحميل أيقونة الموقع الإلكتروني',
    'general' => 'عام',
    'Refresh interval in minutes for unread counter' => ':الفترة الزمنية بالدقائق لتحديث عداد العناوين الغير مقروءه',
    'Original link marks article as read' => 'تحويل العنوان إلى مقروء بمجرد النقر على الرابط الأصلي للعنوان',
    'Cloak the image referrer' => 'Cloak the image referrer',
    // 'This subscription already exists.' => '',
    // 'Connection timeout.' => '',
    // 'Feed is malformed.' => '',
    // 'Invalid SSL certificate.' => '',
    // 'Maximum number of HTTP redirection exceeded.' => '',
    // 'The content size exceeds to maximum allowed size.' => '',
    // 'Unable to detect the feed format.' => '',
    // 'add a new group' => '',
    // 'Groups' => '',
    // 'Back to the group' => '',
    // 'view' => '',
    // 'Item title links to' => '',
    // 'Original' => '',
    // 'Last Login' => '',
    // 'Search' => '',
    // 'There are no results for your search' => '',
    // 'Send bookmarks to Wallabag' => '',
    // 'Wallabag username' => '',
    // 'Wallabag password' => '',
    // 'An error occurred during the last check: "%s".' => '',
    // 'User Profile' => '',
    // 'Users' => '',
    // 'New User' => '',
    // 'New user created successfully.' => '',
    // 'Unable to create this user.' => '',
    // 'Edit User' => '',
    // 'User modified successfully.' => '',
    // 'Unable to edit this user.' => '',
    // 'Remove User' => '',
    // 'Not allowed to fetch feed.' => '',
    // 'Unable to save this subscription in the database.' => '',
    // 'Titles' => '',
    // 'profile' => '',
    // 'users' => '',
    // 'Cronjob URL' => '',
    // 'Do you really want to remove this user: "%s"?' => '',
    // 'Administrator' => '',
    // '%e %B %Y %k:%M' => '',
    // 'Wallabag' => '',
    // 'Wallabag URL' => '',
    // 'Wallabag Client ID' => '',
    // 'Wallabag Client Secret' => '',
    // 'Action' => '',
    // 'Yes' => '',
    // 'No' => '',
    // 'Edit' => '',
    // 'The user id required' => '',
    // 'The username must be unique' => '',
    // 'Current Password' => '',
    // 'New Password' => '',
    // 'Wrong password' => '',
    // 'Duplicated feed' => '',
    // 'This group has been removed successfully.' => '',
    // 'Unable to remove this group.' => '',
    // 'Edit group' => '',
    // 'Group updated successfully.' => '',
    // 'Unable to edit this group.' => '',
    // 'groups' => '',
    // 'There is no group.' => '',
    // 'Do you really want to remove this group: "%s"?' => '',
    // 'This field is required' => '',
    // 'This value must be an integer' => '',
    // 'This text is too long (max. %d)' => '',
    // 'Mark all unread items as read' => '',
    // 'Do not redirect me' => '',
    // 'Last checked: ' => '',
    // 'Last modified: ' => '',
    // 'Expiration date: ' => '',
    // 'ETag: ' => '',
    // 'None' => '',
    // 'Last parsing error: ' => '',
    // 'Ignore expiration date' => '',
    // 'Mark bookmarks as unread' => '',
    // 'Shaarli' => '',
    // 'Send bookmarks to Shaarli' => '',
    // 'Shaarli URL' => '',
    // 'Shaarli secret' => '',
    // 'Shaarli tags' => '',
    // 'Private Bookmarks' => '',
    // 'mark page as read' => '',
    // 'Edit tags' => '',
    // 'Press Enter to save.' => '',
);
