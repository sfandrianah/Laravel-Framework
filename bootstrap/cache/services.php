<?php return array (
  'providers' => 
  array (
    0 => 'Illuminate\\Foundation\\Providers\\ArtisanServiceProvider',
    1 => 'Illuminate\\Auth\\AuthServiceProvider',
    2 => 'Illuminate\\Cache\\CacheServiceProvider',
    3 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    4 => 'Illuminate\\Cookie\\CookieServiceProvider',
    5 => 'Illuminate\\Database\\DatabaseServiceProvider',
    6 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
    7 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
    8 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
    9 => 'Illuminate\\Hashing\\HashServiceProvider',
    10 => 'Illuminate\\Mail\\MailServiceProvider',
    11 => 'Illuminate\\Pagination\\PaginationServiceProvider',
    12 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
    13 => 'Illuminate\\Queue\\QueueServiceProvider',
    14 => 'Illuminate\\Redis\\RedisServiceProvider',
    15 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
    16 => 'Illuminate\\Session\\SessionServiceProvider',
    17 => 'Illuminate\\Translation\\TranslationServiceProvider',
    18 => 'Illuminate\\Validation\\ValidationServiceProvider',
    19 => 'Illuminate\\View\\ViewServiceProvider',
    20 => 'Collective\\Html\\HtmlServiceProvider',
    21 => 'UxWeb\\SweetAlert\\SweetAlertServiceProvider',
    22 => 'Ixudra\\Curl\\CurlServiceProvider',
    23 => 'Maatwebsite\\Excel\\ExcelServiceProvider',
    24 => 'App\\Providers\\AppServiceProvider',
    25 => 'Collective\\Bus\\BusServiceProvider',
    26 => 'App\\Providers\\ConfigServiceProvider',
    27 => 'App\\Providers\\EventServiceProvider',
    28 => 'App\\Providers\\RouteServiceProvider',
  ),
  'eager' => 
  array (
    0 => 'Illuminate\\Auth\\AuthServiceProvider',
    1 => 'Illuminate\\Cookie\\CookieServiceProvider',
    2 => 'Illuminate\\Database\\DatabaseServiceProvider',
    3 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
    4 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
    5 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
    6 => 'Illuminate\\Pagination\\PaginationServiceProvider',
    7 => 'Illuminate\\Session\\SessionServiceProvider',
    8 => 'Illuminate\\View\\ViewServiceProvider',
    9 => 'UxWeb\\SweetAlert\\SweetAlertServiceProvider',
    10 => 'Ixudra\\Curl\\CurlServiceProvider',
    11 => 'Maatwebsite\\Excel\\ExcelServiceProvider',
    12 => 'App\\Providers\\AppServiceProvider',
    13 => 'App\\Providers\\ConfigServiceProvider',
    14 => 'App\\Providers\\EventServiceProvider',
    15 => 'App\\Providers\\RouteServiceProvider',
  ),
  'deferred' => 
  array (
    'command.clear-compiled' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.auth.resets.clear' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.config.cache' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.config.clear' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.down' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.environment' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.key.generate' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.optimize' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.route.cache' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.route.clear' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.route.list' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.tinker' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.up' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.view.clear' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'cache' => 'Illuminate\\Cache\\CacheServiceProvider',
    'cache.store' => 'Illuminate\\Cache\\CacheServiceProvider',
    'memcached.connector' => 'Illuminate\\Cache\\CacheServiceProvider',
    'command.cache.clear' => 'Illuminate\\Cache\\CacheServiceProvider',
    'Illuminate\\Console\\Scheduling\\ScheduleRunCommand' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'migrator' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'migration.repository' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.migrate' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.migrate.rollback' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.migrate.reset' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.migrate.refresh' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.migrate.install' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.migrate.status' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'migration.creator' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.migrate.make' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'seeder' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.seed' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'composer' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.queue.failed' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.queue.retry' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.queue.forget' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'command.queue.flush' => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
    'hash' => 'Illuminate\\Hashing\\HashServiceProvider',
    'mailer' => 'Illuminate\\Mail\\MailServiceProvider',
    'swift.mailer' => 'Illuminate\\Mail\\MailServiceProvider',
    'swift.transport' => 'Illuminate\\Mail\\MailServiceProvider',
    'Illuminate\\Contracts\\Pipeline\\Hub' => 'Illuminate\\Pipeline\\PipelineServiceProvider',
    'queue' => 'Illuminate\\Queue\\QueueServiceProvider',
    'queue.worker' => 'Illuminate\\Queue\\QueueServiceProvider',
    'queue.listener' => 'Illuminate\\Queue\\QueueServiceProvider',
    'queue.failer' => 'Illuminate\\Queue\\QueueServiceProvider',
    'command.queue.work' => 'Illuminate\\Queue\\QueueServiceProvider',
    'command.queue.listen' => 'Illuminate\\Queue\\QueueServiceProvider',
    'command.queue.restart' => 'Illuminate\\Queue\\QueueServiceProvider',
    'queue.connection' => 'Illuminate\\Queue\\QueueServiceProvider',
    'redis' => 'Illuminate\\Redis\\RedisServiceProvider',
    'auth.password' => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
    'auth.password.broker' => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
    'translator' => 'Illuminate\\Translation\\TranslationServiceProvider',
    'translation.loader' => 'Illuminate\\Translation\\TranslationServiceProvider',
    'validator' => 'Illuminate\\Validation\\ValidationServiceProvider',
    'validation.presence' => 'Illuminate\\Validation\\ValidationServiceProvider',
    'html' => 'Collective\\Html\\HtmlServiceProvider',
    'form' => 'Collective\\Html\\HtmlServiceProvider',
    'Collective\\Html\\HtmlBuilder' => 'Collective\\Html\\HtmlServiceProvider',
    'Collective\\Html\\FormBuilder' => 'Collective\\Html\\HtmlServiceProvider',
    'Collective\\Bus\\Dispatcher' => 'Collective\\Bus\\BusServiceProvider',
    'Illuminate\\Contracts\\Bus\\Dispatcher' => 'Collective\\Bus\\BusServiceProvider',
    'Illuminate\\Contracts\\Bus\\QueueingDispatcher' => 'Collective\\Bus\\BusServiceProvider',
  ),
  'when' => 
  array (
    'Illuminate\\Foundation\\Providers\\ArtisanServiceProvider' => 
    array (
    ),
    'Illuminate\\Cache\\CacheServiceProvider' => 
    array (
    ),
    'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider' => 
    array (
    ),
    'Illuminate\\Hashing\\HashServiceProvider' => 
    array (
    ),
    'Illuminate\\Mail\\MailServiceProvider' => 
    array (
    ),
    'Illuminate\\Pipeline\\PipelineServiceProvider' => 
    array (
    ),
    'Illuminate\\Queue\\QueueServiceProvider' => 
    array (
    ),
    'Illuminate\\Redis\\RedisServiceProvider' => 
    array (
    ),
    'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider' => 
    array (
    ),
    'Illuminate\\Translation\\TranslationServiceProvider' => 
    array (
    ),
    'Illuminate\\Validation\\ValidationServiceProvider' => 
    array (
    ),
    'Collective\\Html\\HtmlServiceProvider' => 
    array (
    ),
    'Collective\\Bus\\BusServiceProvider' => 
    array (
    ),
  ),
);