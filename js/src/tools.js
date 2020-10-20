export function getElementsByAttribute(attribute, context = document) {
    let nodeResult = [];
    let nodeList;
    nodeList = context.getElementsByTagName('*');
    for (let node of nodeList) {
        if (node.hasAttribute(attribute)) {
            nodeResult.push(node)
        }
    }
    return nodeResult;
}
