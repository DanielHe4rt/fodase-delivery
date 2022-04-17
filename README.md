# FodaseDeliveryVaiCaralho

## Passos pro projeto ser finalizado


* [x] Modelagem do banco
* [] Modelagem das Entidades
* [] Estruturação de Endpoints
  * [] Cadastro de Parceiros
  * [] Busca de Parceiro (findById)
  * [] Busca por Parceiro (findByRegion)


## Modelo do Banco

table: partners
id: int
tradingName: string
ownerName: string
document: string

table: partner_areas // hasMany
id: int
partner_id: int references id on partners // belongsTo
lat: decimal(8,6)
long: decimal(9,6)


table: partner_address // hasOne
id: int
partner_id: int references id on partners // belongsTo
lat: decimal(8,6)
long: decimal(9,6)
