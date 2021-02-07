# typo3-docker

Work in Progress

Docker example with **L**inux **A**pache, **M**ySql 8.0 and **P**hp

### Installed addons

#### misc

- phpMyAdmin

#### php
- mysqli
- pdo-mysql

## Configuration

- change `php.ini` as you like

## run

```
docker-compose up -d
```

Open phpmyadmin at [http://localhost:8081](http://localhost:8081)

Open web browser at [http://localhost:8080](http://localhost:8080)

Run mysql client:

- `docker-compose exec mysql mysql -u root -p` 

## stop

```
docker-compose down
```


