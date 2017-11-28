#!/usr/bin/python
#============================================================================
# Return to Portfolio: http://ec2-35-166-251-35.us-west-2.compute.amazonaws.com/index.php/project/binary-trees/
# Name: Machine Learning Algorithm Framework
# Author(s): Preston Carman
# Course: CPTR330
# Assignment: All Labs
# Description: The interface to call the machine learning algorithms.
#============================================================================

import csv
import getopt
import math
import random
import sys
import time

# isFloat function found at the following URL:
# http://stackoverflow.com/questions/15357422/python-determine-if-a-string-should-be-converted-into-int-or-float
def isFloat(x):
    try:
        a = float(x)
    except ValueError:
        return False
    else:
        return True

# Load the CSV file into a 2d list with string and numeric values.
def loadCsv(filename):
    lines = csv.reader(open(filename, "r"))
    dataset = list(lines)
    for i in range(len(dataset)):
        dataset[i] = [x if not isFloat(x) else float(x) for x in dataset[i]]
    return dataset

# Split the data into training and test.
def splitDataset(dataset, labels, splitRatio=0.7, randomRecords=False):
    trainSize = int(len(dataset) * splitRatio)
    trainSet = []
    trainLabelsSet = []
    copy = list(dataset)
    copyLabels = list(labels)
    while len(trainSet) < trainSize:
        if randomRecords:
            index = random.randrange(len(copy))
        else:
            index = 0
        trainSet.append(copy.pop(index))
        trainLabelsSet.append(copyLabels.pop(index))
    return [trainSet, copy, trainLabelsSet, copyLabels]

# Separate the labels from the dataset.
def splitDatasetFromLabels(dataset, fields):
    dataOnly = []
    labelsOnly = []
    for row in range(len(dataset)):
        dataOnly.append([])
        labelsOnly.append([])
        for column in range(len(dataset[row])):
            if column in fields:
                labelsOnly[row].append(dataset[row][column])
            else:
                dataOnly[row].append(dataset[row][column])
    return [dataOnly, labelsOnly]

# Determine the accuracy of the predictions
def getAccuracy(testLabels, predictions):
    correct = 0
    testCount = len(testLabels)
    for i in range(testCount):
        if testLabels[i] == predictions[i]:
            correct += 1
    return (correct/float(testCount)) * 100.0

# Print the predictions. Used to auto test the algorithm.
def printRawLabels(predictions):
    for i in range(len(predictions)):
        print(predictions[i])


def main(argv):
    HELP_TEXT = 'test.py -a <algorithm> -d <datafile>'
    
    algorithm = 'naive_bayes'
    dataFile = ''
    fields = []
    randomRecords = False
    rawResults = False
    parameters = {}
    showTiming = True
    splitRatio = 0.7
    
    # Get arguments
    try:
        longArgs = ["algorithm=",
                    "dataFile=",
                    "fields=",
                    "randomRecords",
                    "rawResults",
                    "parameters=",
                    "showTiming",
                    "splitRatio="]
        opts, args = getopt.getopt(argv,"ha:d:f:rp:s:tz",longArgs)
    except getopt.GetoptError:
        print(HELP_TEXT)
        sys.exit(2)
    for opt, arg in opts:
        if opt == '-h':
            print(HELP_TEXT)
            sys.exit()
        elif opt in ("-a", "--algorithm"):
            algorithm = arg
        elif opt in ("-d", "--dataFile"):
            dataFile = arg
        elif opt in ("-f"):
            fields = [int(item) for item in arg.split(",")]
        elif opt in ("-r", "--rawResults"):
            rawResults = True
        elif opt in ("-p", "--parameters"):
            parameters = dict(item.strip().split(':') for item in arg.split("|"))
        elif opt in ("-s", "--splitRatio"):
            splitRatio = float(arg)
        elif opt in ("-t", "--hideTiming"):
            showTiming = False
        elif opt in ("-z", "--randomRecords"):
            randomRecords = True
    
    # Load data
    dataset = loadCsv(dataFile)
    
    # Split data and labels
    dataOnly, labelsOnly = splitDatasetFromLabels(dataset, fields)
    trainingSet, testSet, trainingLabels, testLabels = splitDataset(dataOnly, labelsOnly, splitRatio, randomRecords)

    # Initialize algorithm
    package = algorithm
    name = "MLAlgorithm"
    mlClass = getattr(__import__(package, fromlist=[name]), name)
    ml = mlClass.MLAlgorithm(parameters)
    
    # Start algorithm
    print("Starting {}...".format(ml.getAlgorithm()))

    
    # Train algorithm
    print("Training...", end='', flush=True)
    trainingTime = time.process_time()
    ml.train(trainingSet, trainingLabels)
    elapsedTime = time.process_time() - trainingTime
    if showTiming:
        print("completed in {0:.4f}s".format(elapsedTime), flush=True)
    else:
        print("")
    
    
    # Predict algorithm
    print("Predictions...", end='', flush=True)
    testingTime = time.process_time()
    predictLabels = ml.getPredictions(testSet)
    elapsedTime = time.process_time() - testingTime
    if showTiming:
        print("completed in {0:.4f}s".format(elapsedTime), flush=True)
    else:
        print("")
    
    
    # Show results
    if rawResults:
        printRawLabels(predictLabels)
    else:
        accuracy = getAccuracy(testLabels, predictLabels)
        print('Accuracy: {0}%'.format(accuracy))

if __name__ == "__main__":
    main(sys.argv[1:])
