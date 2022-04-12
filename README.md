# tg-bot

## Generate SSL certificate
`openssl req -x509 -out tg.local.crt -keyout tg.local.key \
-newkey rsa:2048 -nodes -sha256 \
-subj '/CN=tg.local' -extensions EXT -config <( \
printf "[dn]\nCN=tg.local\n[req]\ndistinguished_name = dn\n[EXT]\nsubjectAltName=DNS:tg.local\nkeyUsage=digitalSignature\nextendedKeyUsage=serverAuth")
`

* Certificates must be in a folder `.docker/nginx/ssl`
