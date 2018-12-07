import tweepy as tp

# credentials
consumer_key = ''
consumer_secret = ''
access_token = ''
access_secret = ''

# login
auth = tp.OAuthHandler(consumer_key, consumer_secret)
auth.set_access_token(access_token, access secret)
api = tp.API(auth)

# the app...
