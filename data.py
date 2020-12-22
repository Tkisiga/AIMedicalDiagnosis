import pandas as pd
df_diabetes = pd.read_csv('BUBUTWO.csv')

from sklearn.feature_extraction import text
punc = ['.', ',', '"', "'", '?', '!', ':', ';','-', '(', ')', '[', ']', '{', '}',"%"]
stop_words = text.ENGLISH_STOP_WORDS.union(punc)

from nltk.tokenize import word_tokenize
import nltk
#nltk.download('punkt')
def text_processor(symptom):
    symptom = word_tokenize(symptom)
    nopunc=[word.lower() for word in symptom if word not in stop_words]
    nopunc=' '.join(nopunc)
    print(nopunc)
    return [word for word in nopunc.split()]
    

def text_process(symptom):
    nopunc=[word.lower() for word in symptom if word not in stop_words]
    nopunc=''.join(nopunc)
    return [word for word in nopunc.split()]

# Preparation for classifier
X = df_diabetes["symptom"]
y = df_diabetes["disease"]


from sklearn.feature_extraction.text import TfidfVectorizer, CountVectorizer
vectorizer = TfidfVectorizer(analyzer=text_process).fit(X)
