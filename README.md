## Como rodar
### Instalando dependências
Acesse a pasta `./api` no terminal e execute:
```
npm install
```

Com isso instalamos as dependências Node que precisamos. Estou utilizando Node 10.

### Construindo as imagens e os containers
Acesse a pasta raiz do projeto e execute:
```
docker-compose up -d
```
### Faça o restore do banco:
```
docker exec -i mysql-container mysql -uroot -pprogramadorabordo < api/db/script.sql
```

### Abra os seguintes links no seu navegador para ver o funcionamento da aplicação:
```
localhost:9001/produtos
```

```
locashost:8888
```
