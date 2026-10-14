# StorageBox

Bestellung: `POST /products/storagebox/order`. ID: `data.id`.

Kundenfelder: keine.

| Feld | Typ | Pflicht | Hinweis |
|---|---|---|---|
| `friendly` | string | Ja | required; string; max:255 |
| `size_gb` | integer | Ja | required; integer; min:500; max:20000 |
| `location_id` | string | Nein | Location UUID, oder null für Auto-Select |
| `speed` | integer | Nein | Optional, wird per PATCH nach Provisioning gesetzt |

API-Key-Rechte für alle Modulansichten und Aktionen: `storagebox:create`, `storagebox:delete`, `storagebox:read`, `storagebox:update`.

Verwaltungsaktionen: Namespace erstellen, Backup-Aufbewahrung, Ordner erstellen.

Hinweise:
- size_gb500..20000; optional location_id; speed100/250/500
- No suspend/unsuspend endpoint
