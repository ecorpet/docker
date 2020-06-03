FROM node:10-alpine

# Create app directory
WORKDIR /usr/src/app

COPY package*.json ./
RUN ls -la

RUN npm install
# If you are building your code for production
# RUN npm ci --only=production

# Bundle app source
COPY . .
RUN ls -la

EXPOSE 8080
CMD [ "node", "server.js" ]