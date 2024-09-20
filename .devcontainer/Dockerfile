FROM ubuntu:jammy
ENV DEBIAN_FRONTEND noninteractive
ENV LANG C.UTF-8
ENV pip_packages "ansible cryptography"
 
RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        apt-transport-https \
        ca-certificates \
        curl \
        jq \
        lsb-release \
        python3-pip \
        unzip \
        nginx \
        bash \
    && rm -rf /var/lib/apt/lists/* \
    && apt-get clean


RUN pip install --upgrade pip \
    && pip install $pip_packages \
    && pip install ansible
CMD bash
