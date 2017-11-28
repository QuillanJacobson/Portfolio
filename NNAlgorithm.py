import numpy as np

class NueralNetworks(object):
    def __init__(self):
        self.inputLayerSize = 2
        self.outputLayerSize = 1
        self.hiddenLayerSize = 3

        self.weightOne = np.random.randn(self.inputLayerSize, self.hiddenLayerSize)
        self.weightTwo = np.random.randn(self.hiddenLayerSize, self.outputLayerSize)

    def forward(self, X):
        self.first = np.dot(X, self.weightOne)
        self.second = self.sigmoid(self.first)
        self.third = np.dot(self.second, self.weightTwo)
        yhat = self.sigmoid(self.third)
        return yhat

    def sigmoid(self, z):
        return 1/(1+np.exp^(-z))