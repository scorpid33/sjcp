# Run image with: docker build -t sjcp . && docker run -t -i --rm -p 8000:8000 sjcp

FROM debian:stable

RUN apt-get update
RUN apt-get install -y php php-mysqli mysql-server php-curl

EXPOSE 8000
RUN mkdir /sjcp
WORKDIR /sjcp
ENTRYPOINT ["./start.sh"]
COPY . .
