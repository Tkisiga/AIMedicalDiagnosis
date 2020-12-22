import numpy as np
from flask import Flask, request, jsonify
import requests
import pickle
from data import *
app = Flask(__name__)

with open('Diabmod.h5', 'rb') as handle:
    modell = pickle.load(handle)
# with open('vector.pkl', 'rb') as handle:

    #vetorizer = pickle.load(handle)
dict = {'Type 2 diabetes': 44, 'Type 1 diabetes related celiac disease': 30, 'Diabetes insipidus, diabetes mellitus, optic atrophy': 32,
        'Renal tubulopathy -- diabetes mellitus -- cerebellar ataxia': 23, 'Ataxia -- diabetes -- goiter -- gonadal insufficiency': 23}


@app.route('/api/index', methods=['GET', 'POST'])
def index():
    if request.method == "POST":
        request_data = request.get_json()
        symptoms = request_data['symptoms']
        x = len(symptoms[0].split(','))
        symptoms = vectorizer.transform(symptoms)
        pred = modell.predict(symptoms)
        for k in dict:

            z = x/dict[k]

            y = z*100
    

    #prediction="there is a possibility of "+ pred[0]

    return(jsonify(f"there is a {str(y)} % chance of {pred[0]}"))


if __name__ == '__main__':
    app.run(debug=True)
