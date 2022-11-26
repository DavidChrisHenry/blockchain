/** @format */

const hash = require("crypto-js/sha512");

class Block {
  constructor(prevHash, data) {
    this.prevHash = prevHash;
    this.data = data;
    this.timeStamp = new Date();
    this.hash = this.calculateHash();
  }
  calculateHash() {
    return hash(
      this.prevHash + JSON.stringify(this.data) + this.timeStamp
    ).toString();
  }
}

class Blockchain {
  constructor() {
    const genesisBlock = new Block("0000", { isGenenis: true });
    this.chain = [genesisBlock];
  }
  getLastBlock() {
    return this.chain[this.chain.length - 1];
  }
  addBlock(data) {
    const lastBlock = this.getLastBlock();
    const newBlock = new Block(lastBlock.hash, data);
    this.chain.push(newBlock);
  }
}

const blockchain1 = new Blockchain();
console.log(blockchain1);

blockchain1.addBlock({
  from: "hieu",
  to: "hung",
  message: "cho muon",
  amount: 100,
});
blockchain1.addBlock({
  from: "hung",
  to: "hieu",
  message: "tra tien",
  amount: 50,
});
console.log(blockchain1.chain);
