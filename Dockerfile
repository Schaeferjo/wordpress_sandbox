  FROM wordpress:latest
  COPY --from=wordpress:cli /usr/local/bin/wp /usr/local/bin/wp
