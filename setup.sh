minikube delete
minikube start --driver=virtualbox

eval $(minikube docker-env)
# Kubectl apply -f https://raw.githubusercontent.com/google/metallb/v0.8.1/manifests/metallb.yaml

kubectl apply -f https://raw.githubusercontent.com/metallb/metallb/v0.8.1/manifests/namespace.yaml
kubectl apply -f https://raw.githubusercontent.com/metallb/metallb/v0.8.1/manifests/metallb.yaml
kubectl create secret generic -n metallb-system memberlist --from-literal=secretkey="$(openssl rand -base64 128)"

docker build -t d_nginx ./srcs/nginx
docker build -t d_wordpress ./srcs/wordpress
docker build -t d_phpmyadmin ./srcs/phpmyadmin
kubectl apply -f srcs/nginx/nginx.yaml
kubectl apply -f srcs/wordpress/wordpress.yaml
kubectl apply -f srcs/phpmyadmin/phpmyadmin.yaml
#kubectl apply -f srcs/nginx/service.yaml
kubectl apply -f srcs/metallb.yaml


kubectl get pods
minikube dashboard &
