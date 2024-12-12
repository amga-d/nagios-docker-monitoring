# Project Title: Nagios Monitoring with Docker Compose

## Description:

The project demonstrates how to set up a complete Nagios monitoring system using Docker and Docker Compose. It includes the following components:

* ### Nagios Monitoring Server:
  A dockerized Nagios server for monitoring various services, including a MySQL database server.
  
* ### Web Server:
  A dockerized Ubuntu server for running WordPress using Apache2 server.
  
* ### MySQL Database Server:
  A dockerized MySQL server with Nagios NRPE (Nagios Remote Plugin Executor) configured for health checks.
  
* ### Custom Docker Network:
  A custom Docker network ensuring seamless communication between the containers.
  
* ### Docker Compose Configuration:
  The project uses Docker Compose to manage and orchestrate the services, providing a simple way to deploy and configure the monitoring stack.

## Key Features:

* ### Nagios Monitoring:
  The Nagios server continuously monitors the health of the web server and MySQL (db server) database service using NRPE-based checks.
  
* ### Docker Network:
  Custom IPs and networking configuration for secure and reliable communication between services.
  
* ### Static IP:
  The Nagios, web server, and db server containers are assigned static IP addresses for reliable service communication.

## Technologies Used:

- Nagios
- Docker and Docker Compose
- MySQL Server
- Apache Server
- WordPress
