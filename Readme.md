### Слои:

**Controllers** - обрабатывают входящие запросы по эндпоинтам

**Models** - манипулируют данными и хранилищем

**Services** - инкапсулируют бизнес логику

### Абcтракции:

**User** - сущность пользователя

**UserSettings** - сущность настроек пользователя

**UserSession** - сущность данных сессии пользователя

**Sender** - абстракция отвечает за отправку чего-либо куда-либо

**Authenticator** - абстракция отвечает за проверку подлинности пользователя

### Таблицы:

**users**
* id
* phone
* email
* telegram_id
* remember_token

**user_settings**
* user_id
* setting_1
* setting_2
* ...

**user_sessions**
* id
* user_id
* token
* session_data

__

Публичные свойства в классах используюся исключительно для удобства