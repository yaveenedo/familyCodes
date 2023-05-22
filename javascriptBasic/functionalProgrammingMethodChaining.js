const functionalProgrammingMethodChaining = () => {
    const createProgrammer = (programmer) => {
        const eat = () => {
            console.log(`${programmer} eat`)
            return { eat, sleep, code }
        }
        const sleep = () => {
            console.log(`${programmer} sleep`)
            return { eat, sleep, code }
        }
        const code = () => {
            console.log(`${programmer} code`)
            return { eat, sleep, code }
        }

        return { eat, sleep, code }
    }

    const willy = createProgrammer('willy')
    willy.eat()
    willy.sleep()
    willy.code()
    willy.eat().sleep().code()

    const iddo = createProgrammer('iddo')
    iddo.eat()
    iddo.sleep()
    iddo.code()
    iddo.eat().sleep().code()
}

export default functionalProgrammingMethodChaining
