FROM mysql:5.7

RUN apt-get update
RUN apt-get install -y --no-install-recommends \
    locales \
    vim \
    && apt-get clean \
    && rm -rf /var/cache/apt/archives/* \
    /var/lib/apt/lists/*

RUN echo "ja_JP.UTF-8 UTF-8" > /etc/locale.gen && \
    locale-gen ja_JP.UTF-8
ENV LC_ALL ja_JP.UTF-8

COPY mysqld.cnf /etc/mysql/mysql.conf.d/
COPY charset.cnf /etc/mysql/mysql.conf.d/
