FROM ubuntu:focal
ENV DEBIAN_FRONTEND noninteractive
 
ENV pip_packages "ansible cryptography pywinrm kerberos requests_kerberos passlib msrest PyVmomi pymssql"
 
RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        apt-transport-https \
        ca-certificates \
        curl \
        git \
        jq \
        lsb-release \
        python3-dev \
        python3-gssapi \
        python3-pip \
        python3-netaddr \
        python3-jmespath \
        python3-setuptools \
        python3-wheel \
        python3-pymssql \
        sshpass \
        unzip \
    && rm -rf /var/lib/apt/lists/* \
    && apt-get clean

RUN apt-get install -y nginx

RUN pip install --upgrade pip \
    && pip install $pip_packages \
    && pip install ansible \
    && ansible-galaxy collection install azure.azcollection community.general \
 
CMD    ["/bin/bash"]
